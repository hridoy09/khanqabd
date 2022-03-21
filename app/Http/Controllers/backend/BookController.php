<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Book;
Use Carbon\Carbon;
use File;

class BookController extends Controller
{
    public function addbook()
    {
        $categories=Category::all();
        $subcategories=Subcategory::all();
    	return view('admin.book.addbook',compact('categories','subcategories'));
    }

    public function storebook(Request $request){
    	$validateData = $request->validate([
            'cat_id' => 'required',
            'subcat_id' => 'required',
    	
           
    	],
    	[
            'cat_id.required' => 'select category',
            'subcat_id.required' => 'select subcategory',
    		'pdf_file.mimes' => 'book must be pdf format',
          
    	]);


		//
		if($request->hasFile('pdf_file')) {
            $file = $request->file('pdf_file') ;
            $fileName = $file->getClientOriginalName() ;
            $destinationPath = public_path().'/admin/book' ;
            $file->move($destinationPath,$fileName);
    	}
	
    Book::insert([
      	'pdf_file' => $fileName,
        'cat_id' => $request->cat_id,
        'subcat_id' => $request->subcat_id,
      	'created_at' => Carbon::now(),
  	 ]);
    	$notification = array(
            'message' => 'book Added Successfully',
            'alert-type' => 'success',
        );
      return redirect()->route('book.list')->with($notification);
    }

    public function booklist(){
    	$books = Book::with('category','subcategory')->get();
    	return view('admin.book.listbook',compact('books'));
    }



    public function deletebook($id){
    	$book = Book::findOrFail($id);
        if (File::exists(public_path('admin/book/')).$book->pdf_file) {
            unlink((public_path('admin/book/')).$book->pdf_file);
          }
       
	

		Book::findOrFail($id)->delete();

		
		$notification = array(
            'message' => 'book Deleted Successfully',
            'alert-type' => 'error',
        );
		return redirect()->back()->with($notification);
    }

	public function edit($id)
    {

        $book=Book::find($id);
        return view('admin.book.editbook', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request){

        
        $books = Book::find($id);
		if($request->hasFile('pdf_file')) {
            $file = $request->file('pdf_file') ;
            $fileName = $file->getClientOriginalName() ;
            $destinationPath = public_path().'/admin/book' ;
            $file->move($destinationPath,$fileName);
    	}
    	$save_url = $fileName;
          $books->pdf_file = $save_url;
          $books->save();
            return redirect('book/all-books');
      }

}