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

Route::get("/users", function() {
    return \App\User::all();
});

Route::get("/components", function() {
    return \App\Component::all();
});

Route::get("/post/{id}", "PostController@get_single");

Route::get('/login', array('as'=>'user_login', 'uses'=>'UserController@get_login'));
Route::post('/login', array('as'=>'user_login', 'uses'=>'UserController@post_login'));
Route::get('/logout', array('as'=>'user_logout', 'uses'=>'UserController@get_logout'));
Route::get('/registration', array('as'=>'user_registration', 'uses'=>'UserController@get_register'));
Route::post('/registration', array('as'=>'user_registration', 'uses'=>'UserController@post_register'));

Route::group(['middleware' => 'App\Http\Middleware\Authenticate'], function () {
    Route::get('admin', array('as'=>'admin','uses'=>'AdminController@get_index'));

    //Users
    Route::get('admin/users', array('as'=>'user_index','uses'=>'UserController@get_index'));
    Route::get('admin/user/new', array('as'=>'new_user', 'uses'=>'UserController@get_new'));
    Route::get('admin/user/{id}/edit', array('as'=>'edit_user', 'uses'=>'UserController@edit_user'));
    Route::post('admin/user/create', array('as'=>'create_user', 'uses'=>'UserController@post_user'));
    Route::post('admin/user/update', array('as'=>'update_user', 'uses'=>'UserController@update_user'));
    Route::delete('admin/user/remove', array('as'=>'remove_user', 'uses'=>'UserController@remove_user'));

    //Route::get('admin/posts', array('as'=>'post_index','uses'=>'PostController@get_index'));
    Route::get('admin/posts/{type}', array('as'=>'post_type_index','uses'=>'PostController@get_admin_archive'));
    Route::get('admin/post/new/{type}', array('as'=>'new_post', 'uses'=>'PostController@get_new'));
    Route::get('admin/post/{id}/edit', array('as'=>'edit_post', 'uses'=>'PostController@get_edit'));
    Route::post('admin/post/create', array('as'=>'create_post', 'uses'=>'PostController@post_new'));
    Route::post('admin/post/update', array('as'=>'update_post', 'uses'=>'PostController@post_update'));
    Route::delete('admin/post/remove', array('as'=>'remove_post', 'uses'=>'PostController@post_remove'));

    Route::post('admin/post/data/add', array('as'=>'add_data_field', 'uses'=>'PostController@add_field'));

});


