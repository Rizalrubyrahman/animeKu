<?php

use Illuminate\Support\Facades\Route;

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
Auth::routes();

Route::namespace('Admin')->middleware('auth')->group(function(){
    Route::resource('admin/', 'DashboardController');
    Route::resource('admin/kategori', 'CategoryController');
    Route::resource('admin/artikel', 'ArticleController');
    Route::resource('admin/author', 'AuthorController');
});


Route::get('/', 'Web\HomeController@index');
Route::get('{article:slug}','Web\HomeController@detail');
Route::get('/kategori/{category:slug}', 'Web\HomeController@category');
Route::post('/comment', 'Web\HomeController@comment');