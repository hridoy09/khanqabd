<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use Image;
Use Carbon\Carbon;

class BannerController extends Controller
{
    public function addbanner(){
    	return view('admin.banner.addbanner');
    }

    public function storebanner(Request $request){
    	$validateData = $request->validate([
    		'banner_img' => 'required|image|mimes:jpg,png,jpeg',
            'banner_title' => 'required',
    	],
    	[
    		'banner_img.mimes' => 'banner Image must be of jpg,png,jpeg format',
            'banner_title.required' => 'Provide a good banner Title for SEO',
    	]);


		//
		if($request->hasFile('banner_img')) {
            $file = $request->file('banner_img') ;
            $fileName = $file->getClientOriginalName() ;
            $destinationPath = public_path().'/admin/banner' ;
            $file->move($destinationPath,$fileName);
    	}
	
    Banner::insert([
      	'banner_img' => 'admin/banner/'.$fileName,
        'banner_title' => $request->banner_title,
      	'created_at' => Carbon::now(),
  	 ]);
    	$notification = array(
            'message' => 'banner Added Successfully',
            'alert-type' => 'success',
        );
      return redirect()->route('banner.list')->with($notification);
    }

    public function bannerlist(){
    	$banners = Banner::all();
    	return view('admin.banner.listbanner',compact('banners'));
    }

   public function changeStatus($id){
    	$status = Banner::findOrFail($id)->status;
    	if($status == 1){
    		Banner::findOrFail($id)->update(['status' => 0]);
    		$notification = array(
            'message' => 'banner Disabled Successfully',
            'alert-type' => 'warning',
        );
      		return redirect()->back()->with($notification);
    	}else{
    		Banner::findOrFail($id)->update(['status' => 1]);
    		 $notification = array(
            'message' => 'banner Enabled Successfully',
            'alert-type' => 'success',
        );
      		return redirect()->back()->with($notification);
    	}
    }

    public function deletebanner($id){
    	$banner = Banner::findOrFail($id);
		unlink($banner->banner_img);
		Banner::findOrFail($id)->delete();

		
		$notification = array(
            'message' => 'banner Deleted Successfully',
            'alert-type' => 'error',
        );
		return redirect()->back()->with($notification);
    }

	public function edit($id)
    {

        $banner=Banner::find($id);
        return view('admin.banner.editbanner', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request){

        
        $banners = Banner::find($id);
		if($request->hasFile('banner_img')) {
            $file = $request->file('banner_img') ;
            $fileName = $file->getClientOriginalName() ;
            $destinationPath = public_path().'/admin/banner' ;
            $file->move($destinationPath,$fileName);
    	}
    	$save_url = 'admin/banner/'.$fileName;
          $banners->banner_img = $save_url;
          $banners->save();
            return redirect('banner/all-banners');
      }

}