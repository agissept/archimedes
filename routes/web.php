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

Route::get('/', 'PostController@showPost');
Route::get('/category-article', 'CategoryArticleController@showPost');
Route::get('/category-video', 'CategoryVideoController@showPost');
Route::get('/gallery', 'GalleryController@show');
Route::get('/about', 'AboutController@show');
Route::get('/detail-post/{id}', 'DetailPostController@showPost');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
