<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('index',function (){
    return view('index');
});
Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/single/{id}', 'HomeController@single');

Route::group(['prefix'=>'admin','middleware'=>'auth'],function (){
   Route::get('/',['as'=>'admin.index','uses'=>'AdminController@index']);
    //Category
    Route::get('/category',['as'=>'admin.category','uses'=>'AdminController@category']);
   Route::get('/category/create',['as'=>'admin.category.create','uses'=>'CategoryController@create']);
   Route::get('/category/{id}/edit',['as'=>'admin.category.edit','uses'=>'CategoryController@edit']);
   Route::get('/category/{id}/delete',['as'=>'admin.category.delete','uses'=>'CategoryController@destroy']);
   Route::post('/category/create',['as'=>'admin.category.store','uses'=>'CategoryController@store']);
   Route::post('/category/{id}/update',['as'=>'admin.category.update','uses'=>'CategoryController@update']);
    //article
    Route::get('/article',['as'=>'admin.article','uses'=>'AdminController@article']);
    Route::get('/article/create',['as'=>'admin.article.create','uses'=>'ArticleController@create']);
    Route::get('/article/{id}/edit',['as'=>'admin.article.edit','uses'=>'ArticleController@edit']);
    Route::get('/article/{id}/delete',['as'=>'admin.article.delete','uses'=>'ArticleController@destroy']);
    Route::post('/article/create',['as'=>'admin.article.store','uses'=>'ArticleController@store']);
    Route::post('/article/{id}/update',['as'=>'admin.article.update','uses'=>'ArticleController@update']);
    //comment
    Route::get('/comment',['as'=>'admin.comment','uses'=>'AdminController@comment']);
    Route::get('/comment/delete/{id}',['as'=>'admin.comment.delete','uses'=>'AdminController@deleteComment']);
});

