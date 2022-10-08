<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::get('/posts/{limit?}','App\Http\Controllers\Api\PostsController@getAllposts');

Route::get('/posts/show/{slug}','App\Http\Controllers\Api\PostsController@getpost');
Route::get('/services/{limit?}','App\Http\Controllers\Api\ServicesController@getAllservices');
Route::get('/pages/{slug}','App\Http\Controllers\Api\PageController@getpage');
Route::get('/services/show/{slug}','App\Http\Controllers\Api\ServicesController@getservice');
Route::get('/slides/{limit?}','App\Http\Controllers\Api\SlidersController@getAllslides');

Route::get('/slides/show/{id}','App\Http\Controllers\Api\SlidersController@getslide');