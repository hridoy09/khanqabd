<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use App\Models\Subcategory;
use App\Models\Category;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:subcategory-list|subcategory-create|subcategory-edit|subcategory-delete', ['only' => ['index','store']]);
         $this->middleware('permission:subcategory-create', ['only' => ['create','store']]);
         $this->middleware('permission:subcategory-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:subcategory-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_subcategory = Subcategory::paginate(10);
        $count = 1;
        return view('admin.subcategory.subcategory_list',compact('all_subcategory','count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();
        return view('admin.subcategory.add_subcategory', compact('categories'));
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
        'cat_id' => 'required',
        'subcat_name' => 'required',
        ]);
        $subcategory = Subcategory::create([
            'cat_id' => $request->cat_id,
            'subcat_name'=>$request->subcat_name,
        ]);
        return redirect()->back()->with('success','Subcategory added successfully');
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
        $subcategory=Subcategory::find($id);
        $categories=Category::all();
        
        return view('admin.subcategory.edit_subcategory',compact('subcategory','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Subcategroy  
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subcategory $subcategory)

    {
    
        $request->validate([
            'cat_id' => 'required',
            'subcat_name' => 'required',
        ]);
    
        $subcategory->update($request->all());
    
        return redirect()->route('subcategory.index')
                        ->with('success','Sub-category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subcategory  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subcategory $subcategory)
    {
        $subcategory->delete();
        return redirect()->route('subcategory.index')
                        ->with('success','subcategory deleted successfully');
    }
}
