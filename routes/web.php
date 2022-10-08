<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;

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

Route::get('/', 'App\Http\Controllers\SiteController@index');
Route::get('/services', 'App\Http\Controllers\SiteController@services');
Route::get('/about', 'App\Http\Controllers\SiteController@about');
Route::get('/contact', 'App\Http\Controllers\SiteController@contact');
Route::get('/blog', 'App\Http\Controllers\SiteController@blog');
Route::get('/blog/{slug}', 'App\Http\Controllers\SiteController@show');
Route::get('/posts/{slug}', 'App\Http\Controllers\SiteController@postCategory');
Route::post('/contact1', 'App\Http\Controllers\SiteController@storecontact');
Route::get('/service/{id}', 'App\Http\Controllers\SiteController@showService');
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
