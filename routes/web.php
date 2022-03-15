<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\backend\LogoController;
use App\Http\Controllers\backend\BannerController;

use App\Http\Controllers\CategoryController;

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

Route::resource('category', CategoryController::class);
Route::get('/', [UserController::class, 'home'])->name('index');
Route::get('/bayan', [UserController::class, 'bayan'])->name('bayan');
Route::get('/book', [UserController::class, 'book'])->name('book');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard',  [HomeController::class, 'index'])->name('home')->middleware('auth');


Route::group(['middleware'=>['auth']], function(){
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

});
