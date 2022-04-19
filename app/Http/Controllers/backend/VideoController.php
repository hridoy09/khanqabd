<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Video;
use Carbon\Carbon;
use File;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:video-list|video-create|video-edit|video-delete', ['only' => ['videolist','store']]);
         $this->middleware('permission:video-create', ['only' => ['addvideo','storevideo']]);
         $this->middleware('permission:video-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:video-delete', ['only' => ['deletevideo']]);
    }
    public function addvideo()
    {

        $categories=Category::all();
        $subcategories=Subcategory::all();
    	return view('admin.video.addvideo',compact('categories','subcategories'));
    }

    public function storevideo(Request $request){
    	$validateData = $request->validate([
            'cat_id' => 'required',
            'subcat_id' => 'required',


    	],
    	[
            'cat_id.required' => 'select category',
            'subcat_id.required' => 'select subcategory',
    		'video_file.mimes' => 'video must be mp3 format',

    	]);

        if($request->hasFile('feature_img')) {
            $file = $request->file('feature_img') ;
            $imgfileName = $file->getClientOriginalName() ;
            $imgPath = public_path().'/admin/video/feature_img' ;
            $file->move($imgPath,$imgfileName);
    	}else {
            $notification = array(
                'message' => 'image not find',
                'alert-type' => 'failed',
            );
          return back()->with($notification);
        }

		if($request->hasFile('video_file')) {
            $file = $request->file('video_file') ;
            $fileName = $file->getClientOriginalName() ;
            $destinationPath = public_path().'/admin/video' ;
            $file->move($destinationPath,$fileName);
    	}else {
            $notification = array(
                'message' => 'video not find',
                'alert-type' => 'failed',
            );
          return back()->with($notification);
        }
    Video::insert([
      	'feature_img' => $imgfileName,
      	'video_file' => $fileName,
        'cat_id' => $request->cat_id,
        'subcat_id' => $request->subcat_id,
      	'created_at' => Carbon::now(),
  	 ]);
    	$notification = array(
            'message' => 'video Added Successfully',
            'alert-type' => 'success',
        );
      return redirect()->route('video.list')->with($notification);
    }

    public function videolist(){
    	$videos = Video::paginate(1);
    	return view('admin.video.listvideo',compact('videos'));
    }



    public function deletevideo($id){
    	$video = Video::findOrFail($id);
        $path = public_path("admin/video/feature_img/".$video->feature_img);
        if (is_file($path)){
            unlink($path);
        }
        if (File::exists(public_path('admin/video/'.$video->video_file))) {
            unlink(public_path('admin/video/'.$video->video_file));
        }

		Video::findOrFail($id)->delete();


		$notification = array(
            'message' => 'video Deleted Successfully',
            'alert-type' => 'error',
        );
		return back()->with($notification);
    }

	public function edit($id)
    {

        $video=Video::find($id);
        return view('admin.video.editvideo', compact('video'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request){


        $videos = Video::find($id);
		if($request->hasFile('video_file')) {
            $file = $request->file('video_file') ;
            $fileName = $file->getClientOriginalName() ;
            $destinationPath = public_path().'/admin/video' ;
            $file->move($destinationPath,$fileName);
    	}
    	$save_url = $fileName;
          $videos->video_file = $save_url;
          $videos->save();
            return redirect('video/all-videos');
      }

}