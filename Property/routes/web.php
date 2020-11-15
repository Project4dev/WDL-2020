<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SellController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Input;

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
    return view('myhome');
});

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/index', function () {
    return view('layouts.base');
});
// Route::get('/testing', function () {
//     return view('test');
// });


Route::get('/newlogin', function () {
    return view('newLogin');
});
Route::get('/newregister', function () {
    return view('newRegister');
});

Route::get('/forgotpass', function () {
    return view('forgotPass');
});
Route::get('/reset-password', function () {
    return view('reset');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/myhome', function () {
    return view('myhome');
});
Route::get('/buy',[SellController::class,'display1']);
Route::get('/rent',[SellController::class,'display']);
Route::get('/all-post',[SellController::class,'display_all']);

// Route::get('/rent', function () {
//     return view('rent');
// });

Route::get('/sell',[SellController::class,'create'])->name('sell');
Route::post('/store',[SellController::class,'store'])->name('store');
Route::post('/contact',[SellController::class,'FeedStore'])->name('contact');
// Route::post('/edit',[SellController::class,'edit'])->name('edit');


Route::post('/search',[SellController::class,'SearchDisplay']);
Route::get('/search', function () {
    return view('search');
});

Route::get('/edit/{id}', [SellController::class,'edit'])->name('edit');
Route::put('/update/{id}',[SellController::class,'update']);
Route::post('/update/{id}',[SellController::class,'update']);
Route::get('/detail/{id}',[SellController::class,'show']);
Route::get('/feedshow',[SellController::class,'FeedShow']);
Route::get('/delete-sell/{id}',[SellController::class,'destroy']);
Route::get('/registered-users',[AdminController::class,'show'])->name('registered-users');
Route::get('/profile/{id}',[AdminController::class,'display']);
Route::get('/admin',[AdminController::class,'index'])->name('admin');
Route::get('/delete/{id}',[AdminController::class,'destroy']);




// Route::get('/reset-password/{token}', 'App\Http\Controllers\Auth\ResetPasswordController@getPassword')->name('reset-password');
// Route::post('/reset-password', 'App\Http\Controllers\Auth\ResetPasswordController@updatePassword')->name('reset-password');
