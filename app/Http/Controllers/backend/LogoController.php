<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Logo;
use Image;
Use Carbon\Carbon;

class LogoController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:user-list|user-create|logo-edit|logo-delete', ['only' => ['logolist','store']]);
         $this->middleware('permission:logo-create', ['only' => ['addlogo','storelogo']]);
         $this->middleware('permission:logo-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:logo-delete', ['only' => ['deletelogo']]);
    }
    public function addlogo(){
    	return view('admin.logo.addlogo');
    }

    // public function storelogo(Request $request){
    // 	$validateData = $request->validate([
    // 		'logo' => 'required|image|mimes:jpg,png,jpeg',
    //         'logo_name' => 'required',
    // 	],
    // 	[
    // 		'logo.mimes' => 'logo Image must be of jpg,png,jpeg format',
    //         'logo_name.required' => 'Provide a good logo Title for SEO',
    // 	]);


	// 	//
	// 	if($request->hasFile('logo')) {
    //         $file = $request->file('logo') ;
    //         $fileName = $file->getClientOriginalName() ;
    //         $destinationPath = public_path().'/admin/logo' ;
    //         $file->move($destinationPath,$fileName);
    // 	}
	// 	//

    // 	// $image = $request->file('logo');
    // 	// $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    // 	// Image::make($image)->resize(1017,400)->save('admin/logo/'.$name_gen);
    // 	// $save_url = 'admin/logo/'.$name_gen;
    // Logo::insert([
    //   	'logo' => 'admin/logo/'.$fileName,
    //     'logo_name' => $request->logo_name,
    //   	'created_at' => Carbon::now(),
  	//  ]);
    // 	$notification = array(
    //         'message' => 'logo Added Successfully',
    //         'alert-type' => 'success',
    //     );
    //   return redirect()->route('logo.list')->with($notification);
    // }

    public function logolist(){
    	$logos = Logo::all();
    	return view('admin.logo.listlogo',compact('logos'));
    }

   public function changeStatus($id){
    	$status = Logo::findOrFail($id)->status;
    	if($status == 1){
    		Logo::findOrFail($id)->update(['status' => 0]);
    		$notification = array(
            'message' => 'logo Disabled Successfully',
            'alert-type' => 'warning',
        );
      		return redirect()->back()->with($notification);
    	}else{
    		Logo::findOrFail($id)->update(['status' => 1]);
    		 $notification = array(
            'message' => 'logo Enabled Successfully',
            'alert-type' => 'success',
        );
      		return redirect()->back()->with($notification);
    	}
    }

    public function deletelogo($id){
    	$logo = Logo::findOrFail($id);
		unlink($logo->logo);
		Logo::findOrFail($id)->delete();

		
		$notification = array(
            'message' => 'logo Deleted Successfully',
            'alert-type' => 'error',
        );
		return redirect()->back()->with($notification);
    }

	public function edit($id)
    {

        $logo=Logo::find($id);
        return view('admin.logo.editlogo', compact('logo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request){
		
		
        $logos = Logo::find($id);
		if($request->hasFile('logo')) {
            $file = $request->file('logo') ;
            $fileName = $file->getClientOriginalName() ;
            $destinationPath = public_path().'/admin/logo' ;
            $file->move($destinationPath,$fileName);
    	}
    	$save_url = 'admin/logo/'.$fileName;
          $logos->logo = $save_url;
          $logos->save();
            return redirect('logo/all-logos');
      }

}