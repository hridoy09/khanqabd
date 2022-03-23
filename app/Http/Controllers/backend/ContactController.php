<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_contact = Contact::paginate(10);
        $count = 1;
        return view('admin.contact.contact_list',compact('all_contact','count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contacts=Contact::all();
        return view('admin.contact.add_contact', compact('contacts'));
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
        'whatsapp_no' => 'required',
        'telegram_link' => 'required',
        'gmail' => 'required',
        ]);
        $contact = Contact::create([
            'whatsapp_no' => $request->whatsapp_no,
            'telegram_link'=>$request->telegram_link,
            'gmail'=>$request->gmail,
        ]);
        return redirect()->back()->with('success','contact added successfully');
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
        $contact=Contact::find($id);
        $contacts=Contact::all();
        
        return view('admin.contact.edit_contact',compact('contact','contacts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Subcategroy  
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)

    {
    
        $request->validate([
            'cat_id' => 'required',
            'subcat_name' => 'required',
        ]);
    
        $contact->update($request->all());
    
        return redirect()->route('contact.index')
                        ->with('success','Sub-contact updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('contact.index')
                        ->with('success','contact deleted successfully');
    }
}
