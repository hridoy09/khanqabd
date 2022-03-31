<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Map;

class MapController extends Controller
{

    function __construct()
    {
         $this->middleware('permission:map-list|map-create|map-edit|map-delete', ['only' => ['index','store']]);
         $this->middleware('permission:map-create', ['only' => ['create','store']]);
         $this->middleware('permission:map-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:map-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_modal= Map::paginate(10);
        $count = 1;
        return view('admin.modal.modal_list',compact('all_modal','count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('admin.modal.add_modal');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
        'first_bayan' => 'required',
        'first_bayan_1st_time' => 'required',
        'first_bayan_2nd_time' => 'required',
        'second_bayan' => 'required',
        'second_bayan_time' => 'required',
        'thied_bayan' => 'required',
        'third_bayan_time' => 'required',
        'iframe_link' => 'required',
        ]);
        $modal = Map::create([
            'first_bayan' => $request->first_bayan,
            'first_bayan_1st_time'=>$request->first_bayan_1st_time,
            'first_bayan_2nd_time'=>$request->first_bayan_2nd_time,
            'second_bayan'=>$request->second_bayan,
            'second_bayan_time'=>$request->second_bayan_time,
            'thied_bayan'=>$request->thied_bayan,
            'third_bayan_time'=>$request->third_bayan_time,
            'iframe_link'=>$request->iframe_link,
        ]);
        return redirect()->back()->with('success','modal added successfully');
    }

    /**
     * Display the specified resource.
     *
     */
    
    /**
     * Show the form for editing the specified resource.
   
     */
    public function edit($id)
    {
        $modal=Map::find($id);
        
        return view('admin.modal.edit_modal',compact('modal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Subcategroy  
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Map $modal)

    {
    
        $request->validate([
            'first_bayan' => 'required',
            'first_bayan_1st_time' => 'required',
            'first_bayan_2nd_time' => 'required',
            'second_bayan' => 'required',
            'second_bayan_time' => 'required',
            'thied_bayan' => 'required',
            'third_bayan_time' => 'required',
            'iframe_link' => 'required',
        ]);
    
        $modal->update($request->all());
    
        return redirect()->route('modal.index')
                        ->with('success','Time updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\modal  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Map $modal)
    {
        $modal->delete();
        return redirect()->route('modal.index')
                        ->with('success','modal deleted successfully');
    }
}
