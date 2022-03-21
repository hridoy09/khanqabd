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


		//
		if($request->hasFile('audio_file')) {
            $file = $request->file('audio_file') ;
            $fileName = $file->getClientOriginalName() ;
            $destinationPath = public_path().'/admin/audio' ;
            $file->move($destinationPath,$fileName);
    	}
	
    Audio::insert([
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
    	$audios = Audio::with('category','subcategory')->get();
    	return view('admin.audio.listaudio',compact('audios'));
    }



    public function deleteaudio($id){
    	$audio = Audio::findOrFail($id);
        if (File::exists(public_path('admin/audio/')).$audio->audio_file) {
            unlink((public_path('admin/audio/')).$audio->audio_file);
          }
       
	

		Audio::findOrFail($id)->delete();

		
		$notification = array(
            'message' => 'audio Deleted Successfully',
            'alert-type' => 'error',
        );
		return redirect()->back()->with($notification);
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