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

Route::get('/', 'PostController@posts');

Route::group(['prefix'=>'admin'],function(){

    Route::group(['prefix'=>'post'],function(){
       Route::get('/',['as' => 'admin.post.index', 'uses' => 'AdminPostController@index']);
       Route::get('create',['as' => 'admin.post.create', 'uses' => 'AdminPostController@create']);
       Route::post('store',['as'=>'admin.post.store','uses' => 'AdminPostController@store']);
       Route::get('edit/{id}',['as'=>'admin.post.edit','uses'=>'AdminPostController@edit']);
       Route::put('update/{id}',['as'=>'admin.post.update', 'uses'=>'AdminPostController@update']);
       Route::get('destroy/{id}',['as'=>'admin.post.destroy','uses'=>'AdminPostController@destroy']);
    });
});
