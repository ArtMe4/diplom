<?php

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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', 'ArticlesController@index');
Route::get('/articles/people', 'ArticlesController@people');
Route::get('/articles/struct', 'ArticlesController@struct');
Route::get('/articles/deyat', 'ArticlesController@deyat');
Route::get('/articles/about', 'ArticlesController@about');
Route::get('/articles/palaty', 'ArticlesController@palaty');
Route::get('/articles/sovety', 'ArticlesController@sovety');
Route::get('/articles/komiss', 'ArticlesController@komiss');
Route::get('/articles/form', 'ArticlesController@form');

Route::post('/articles/form', 'ArticlesController@sendForm');

Auth::routes(['register' => false,
    'reset' => false,]);

Route::get('/home', 'HomeController@index')->name('home');
//Route::group([
//    'middleware' => 'admin'
//], function (){
//    Route::get('/admin', 'AdminController@index');
//});

Route::resource('admin', 'AdminController');

Route::resource('article', 'ArticlesController');
