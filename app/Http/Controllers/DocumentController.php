<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Document;
use File;
Use Carbon\Carbon;
class DocumentController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:user-list|user-create|document-edit|document-delete', ['only' => ['documentlist','store']]);
         $this->middleware('permission:document-create', ['only' => ['adddocument','storedocument']]);
         $this->middleware('permission:document-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:document-delete', ['only' => ['deletedocument']]);
    }
      public function adddocument()
      {
          $categories=Category::all();
      
          return view('admin.document.adddocument',compact('categories'));
      }
  
      public function storedocument(Request $request){
          $validateData = $request->validate([
              'cat_id' => 'required',
              'document_file' => 'required',
             
          ],
          [
              'cat_id.required' => 'select category',
              'document_file.mimes' => 'document must be pdf format',
            
          ]);
        
          //
          if($request->hasFile('document_file')) {
              $file = $request->file('document_file');
              $fileName = $file->getClientOriginalName();
              $destinationPath = public_path().'/admin/document' ;
              $file->move($destinationPath,$fileName);
          }
      
      Document::insert([
         
        'document_file' => $fileName,
          'cat_id' => $request->cat_id,
          'document_file' => $request->document_file,
            'created_at' => Carbon::now(),
         ]);
          $notification = array(
              'message' => 'document Added Successfully',
              'alert-type' => 'success',
          );
        return redirect()->route('document.list')->with($notification);
      }
  
      public function documentlist(){
          $documents = Document::with('category')->paginate(10);
          return view('admin.document.listdocument',compact('documents'));
      }
  
  
  
      public function deletedocument($id){
          $document = Document::findOrFail($id);
        
            if (File::exists(public_path('admin/document/')).$document->document_file) {
              unlink((public_path('admin/document/')).$document->document_file);
            }
          Document::findOrFail($id)->delete();
  
          
          $notification = array(
              'message' => 'document Deleted Successfully',
              'alert-type' => 'error',
          );
          return redirect()->back()->with($notification);
      }
  
      public function edit($id)
      {
  
          $document=Document::find($id);
          return view('admin.document.editdocument', compact('document'));
      }
  
      /**
       * Update the specified resource in storage.
       *
       * @param  \Illuminate\Http\Request  $request
       * @param  int  $id
       * @return \Illuminate\Http\Response
       */
      public function update($id, Request $request){
  
          
          $document = Document::find($id);
         
          if($request->hasFile('document_file')) {
              $file = $request->file('document_file') ;
              $fileName = $file->getClientOriginalName() ;
              $destinationPath = public_path().'/admin/document' ;
              $file->move($destinationPath,$fileName);
          }
          $save_url = $fileName;
            $document->document_file = $save_url;
            $document->save();
              return redirect('document/all-document');
        }
  
  }