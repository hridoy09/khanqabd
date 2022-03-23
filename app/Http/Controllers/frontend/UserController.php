<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Logo;
use App\Models\Banner;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        $logos=Logo::where('status',1)->get();
        $banners=Banner::where('status',1)->get();
        return view('frontend.index', compact("logos",'banners'));
        //
    }
    public function bayan()
    {
        
        $logos=Logo::where('status',1)->get();
        $banners=Banner::where('status',1)->get();
        return view('frontend.bayan', compact("logos",'banners'));
        //
    }
    public function book()
    {
        
        $logos=Logo::where('status',1)->get();
        $banners=Banner::where('status',1)->get();
        return view('frontend.books',compact("logos",'banners'));
        //
    }
    public function audio()
    {
        
        $logos=Logo::where('status',1)->get();
        $banners=Banner::where('status',1)->get();
        return view('frontend.singleaudio',compact("logos",'banners'));
        //
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *         
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
