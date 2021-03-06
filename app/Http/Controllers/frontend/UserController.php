<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Audio;
use Illuminate\Http\Request;
use App\Models\Logo;
use App\Models\Banner;
use App\Models\Book;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Contact;
use App\Models\Document;
use App\Models\Map;
use App\Models\Video;

class UserController extends Controller
{
    protected $categories;

    public function __construct()
    {
        $this->categories = Category::with('subcategories')->get();
        view()->share('categories', $this->categories);
    }
    public function home()
    {
        $logos=Logo::where('status',1)->get();
        $banners=Banner::where('status',1)->get();
        $subcategories=Subcategory::with('audios')->whereHas('audios')->get();
       $books=Book::all();
       $contacts=Contact::latest()->first();
       $modals=Map::latest()->first();
       $documents=Document::all()->take(6);
        $videos=Video::all();
        return view('frontend.index', compact("logos",'documents','banners', 'subcategories','books','contacts','modals','videos'));
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
        $books=Book::paginate(30);

        return view('frontend.books',compact("logos",'banners','books'));
        //
    }

    public function document()
    {

        $logos=Logo::where('status',1)->get();
        $banners=Banner::where('status',1)->get();
        $documents=Document::paginate(30);

        return view('frontend.documents',compact("logos",'banners','documents'));
        //
    }
    public function bookBycatId($bookCat)
    {

        $logos=Logo::where('status',1)->get();
        $banners=Banner::where('status',1)->get();
        $books=Book::where('book_cat', $bookCat)->get();
        // return view('frontend.books',compact("logos",'banners','books'));
        return $books;
        //
    }

    public function singleaudio($id)
    {

        $logos=Logo::where('status',1)->get();
        $banners=Banner::where('status',1)->get();
        $audios=Audio::find($id);
        return view('frontend.audio',compact("logos",'banners','audios'));
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

    public function audioBySubcatId($id)
    {
        $logos=Logo::where('status',1)->get();
        $banners=Banner::where('status',1)->get();
        $audios=Audio::whereSubcatId($id)->paginate(15);
        return view('frontend.bayan', compact("logos",'banners','audios'));

    }
    public function singlevideo($id)
    {
        $logos=Logo::where('status',1)->get();
        $banners=Banner::where('status',1)->get();
        $videos=Video::find($id);
        return view('frontend.singlevideo', compact("logos",'banners','videos'));

    }

}
