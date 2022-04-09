<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\backend\LogoController;
use App\Http\Controllers\backend\BannerController;
use App\Http\Controllers\backend\SubcategoryController;
use App\Http\Controllers\backend\AudioController;
use App\Http\Controllers\backend\BookController;
use App\Http\Controllers\backend\ContactController;
use App\Http\Controllers\backend\MapController;
use App\Http\Controllers\backend\PermissionController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\RoleController;
use App\Http\Controllers\backend\UserController as BuserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DocumentController;
use Illuminate\Contracts\Auth\UserProvider;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Route::get('/dashboard', function () {
//     return view('admin.master.main');
// });



Route::get('/', [UserController::class, 'home'])->name('index');
Route::get('bayan', [UserController::class, 'bayan'])->name('bayan');
Route::get('books', [UserController::class, 'book'])->name('book');
Route::get('audio', [UserController::class, 'audio'])->name('audio');
Route::get('singleaudio', [UserController::class, 'singleaudio'])->name('simgleaudio');
Route::get('audio-by-subcat/{id}', [UserController::class, 'audioBySubcatId'])->name('audio_by_subcat');
Route::get('book-by-cat/{book_cat}', [UserController::class, 'bookBycatId'])->name('book_by_cat');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard',  [HomeController::class, 'index'])->name('home')->middleware('auth');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', BUserController::class);
    Route::resource('products', ProductController::class);
});


Route::group(['middleware'=>['auth']], function(){

	Route::resource('category', CategoryController::class);
	Route::resource('subcategory', SubcategoryController::class);
	Route::resource('contact', ContactController::class);
	Route::resource('modal', MapController::class);
	Route::resource('permission', PermissionController::class);

Route::prefix('logo')->group(function(){
	// Route::get('/add', [LogoController::class, 'addlogo'])->name('logo.add');
	Route::post('/store', [LogoController::class, 'storelogo'])->name('logo.store');
	Route::get('/all-logos', [LogoController::class, 'logolist'])->name('logo.list');
	Route::get('/change_status/{id}', [LogoController::class, 'changeStatus']);
	Route::get('/delete/{id}', [LogoController::class, 'deletelogo']);
	Route::get('/edit/{id}', [LogoController::class, 'edit'])->name('logo.edit');
	Route::post('/update/{id}', [LogoController::class, 'update'])->name('logo.update');
});
Route::prefix('banner')->group(function(){
	Route::get('/add', [bannerController::class, 'addbanner'])->name('banner.add');
	Route::post('/store', [BannerController::class, 'storebanner'])->name('banner.store');
	Route::get('/all-banners', [BannerController::class, 'bannerlist'])->name('banner.list');
	Route::get('/change_status/{id}', [BannerController::class, 'changeStatus']);
	Route::get('/delete/{id}', [BannerController::class, 'deletebanner']);
	Route::get('/edit/{id}', [BannerController::class, 'edit'])->name('banner.edit');
	Route::post('/update/{id}', [BannerController::class, 'update'])->name('banner.update');
});
Route::prefix('audio')->group(function(){
	Route::get('/add', [AudioController::class, 'addaudio'])->name('audio.add');
	Route::post('/store', [AudioController::class, 'storeaudio'])->name('audio.store');
	Route::get('/all-files', [AudioController::class, 'audiolist'])->name('audio.list');

	Route::get('/delete/{id}', [AudioController::class, 'deleteaudio']);
	Route::get('/edit/{id}', [AudioController::class, 'edit'])->name('audio.edit');
	Route::post('/update/{id}', [AudioController::class, 'update'])->name('audio.update');
});
Route::prefix('book')->group(function(){
	Route::get('/add', [BookController::class, 'addbook'])->name('book.add');
	Route::post('/store', [BookController::class, 'storebook'])->name('book.store');
	Route::get('/all-files', [BookController::class, 'booklist'])->name('book.list');
	Route::get('/delete/{id}', [BookController::class, 'deletebook']);
	Route::get('/edit/{id}', [BookController::class, 'edit'])->name('book.edit');
	Route::post('/update/{id}', [BookController::class, 'update'])->name('book.update');
});

Route::prefix('document')->group(function(){
	Route::get('/add', [DocumentController::class, 'adddocument'])->name('document.add');
	Route::post('/store', [DocumentController::class, 'storedocument'])->name('document.store');
	Route::get('/all-files', [DocumentController::class, 'documentlist'])->name('document.list');
	Route::get('/delete/{id}', [DocumentController::class, 'deletedocument']);
	Route::get('/edit/{id}', [DocumentController::class, 'edit'])->name('document.edit');
	Route::post('/update/{id}', [DocumentController::class, 'update'])->name('document.update');
});

});
