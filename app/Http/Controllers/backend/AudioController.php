<?php

namespace App\Http\Controllers\backend;
use App\Models\Audio;
use App\Models\Category;
use App\Models\Subcategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use Carbon\Carbon;
use File;
class AudioController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:audio-list|audio-create|audio-edit|audio-delete', ['only' => ['audiolist','store']]);
         $this->middleware('permission:audio-create', ['only' => ['addaudio','storeaudio']]);
         $this->middleware('permission:audio-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:audio-delete', ['only' => ['deleteaudio']]);
    }
    public function addaudio()
    {

        $categories=Category::all();
        $subcategories=Subcategory::all();
    	return view('admin.audio.addaudio',compact('categories','subcategories'));
    }

    public function storeaudio(Request $request){
    	$validateData = $request->validate([
            'cat_id' => 'required',
            'subcat_id' => 'required',


    	],
    	[
            'cat_id.required' => 'select category',
            'subcat_id.required' => 'select subcategory',
    		'audio_file.mimes' => 'audio must be mp3 format',

    	]);

        if($request->hasFile('feature_img')) {
            $file = $request->file('feature_img') ;
            $imgfileName = $file->getClientOriginalName() ;
            $imgPath = public_path().'/admin/audio/feature_img' ;
            $file->move($imgPath,$imgfileName);
    	}else {
            $notification = array(
                'message' => 'image not find',
                'alert-type' => 'failed',
            );
          return back()->with($notification);
        }

		if($request->hasFile('audio_file')) {
            $file = $request->file('audio_file') ;
            $fileName = $file->getClientOriginalName() ;
            $destinationPath = public_path().'/admin/audio' ;
            $file->move($destinationPath,$fileName);
    	}else {
            $notification = array(
                'message' => 'audio not find',
                'alert-type' => 'failed',
            );
          return back()->with($notification);
        }
    Audio::insert([
      	'feature_img' => $imgfileName,
      	'audio_file' => $fileName,
        'cat_id' => $request->cat_id,
        'subcat_id' => $request->subcat_id,
      	'created_at' => Carbon::now(),
  	 ]);
    	$notification = array(
            'message' => 'audio Added Successfully',
            'alert-type' => 'success',
        );
      return redirect()->route('audio.list')->with($notification);
    }

    public function audiolist(){
    	$audios = Audio::with('category','subcategory')->paginate(10);
    	return view('admin.audio.listaudio',compact('audios'));
    }



    public function deleteaudio($id){
    	$audio = Audio::findOrFail($id);
        $path = public_path("admin/audio/feature_img/".$audio->feature_img);
        if (is_file($path)){
            unlink($path);
        }
        if (File::exists(public_path('admin/audio/'.$audio->audio_file))) {
            unlink(public_path('admin/audio/'.$audio->audio_file));
        }

		Audio::findOrFail($id)->delete();


		$notification = array(
            'message' => 'audio Deleted Successfully',
            'alert-type' => 'error',
        );
		return back()->with($notification);
    }

	public function edit($id)
    {

        $audio=Audio::find($id);
        return view('admin.audio.editaudio', compact('audio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request){


        $audios = Audio::find($id);
		if($request->hasFile('audio_file')) {
            $file = $request->file('audio_file') ;
            $fileName = $file->getClientOriginalName() ;
            $destinationPath = public_path().'/admin/audio' ;
            $file->move($destinationPath,$fileName);
    	}
    	$save_url = $fileName;
          $audios->audio_file = $save_url;
          $audios->save();
            return redirect('audio/all-audios');
      }

}
