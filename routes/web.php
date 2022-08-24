<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\usercontroller;
use App\Http\Controllers\category;

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

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');			
})->name('contact');
Route::get('/shop', function () {
    return view('shop');
})->name('shop');
Route::get('/shop-single', function () {
    return view('shop-single');
})->name('shop-single');







  
Auth::routes();
  
/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {
  
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {
  
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:manager'])->group(function () {
  
    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');

    Route::resource('products', ProductController::class);
    Route::resource('users', usercontroller::class);

    Route::get('/addcategory', function () { return view('backend.module.categorys.addcategorys'); })->name('addcategory');
    Route::get('showcategory',[category::class, 'showcategory'])->name('showcategory');
    Route::get('/deletecolorcategory/{id}', [category::class, 'deletecolorcategory']) -> name('deletecolorcategory');
    Route::get('/deletelengthcategory/{id}', [category::class, 'deletelengthcategory']) -> name('deletelengthcategory');
    Route::post('/addcolorcategory',[category::class, 'addcolorcategory'])->name('/addcolorcategory');
     Route::post('/addlengthcategory',[category::class, 'addlengthcategory'])->name('/addlengthcategory');

});