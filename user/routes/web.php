<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CalenderController;

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
Route::get('/','HomeController@home' )->name('home');
Route::get('/admin','AdminController@adminHomepage' )->name('admin');
Route::get('/admin/calender','AdminController@adminCalender' )->name('calender');
Route::get('/admin/addpost','AdminController@adminAddPost' )->name('addpost');

Route::get('/aboutus','HomeController@about' )->name('about');
Route::get('/contact','HomeController@contact' )->name('contact');
Route::get('/checkout','HomeController@checkout' )->name('checkout');
Route::get('/category','HomeController@category')->name('category');
Route::get('/cart','HomeController@cartsummary')->name('cartsummary');
Route::get('/wishlist','HomeController@wishlist')->name('wishlist');
