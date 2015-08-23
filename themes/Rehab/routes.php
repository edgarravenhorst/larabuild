<?php

Route::get("/page/{id}", "PageController@get_single");
Route::get("/video/{id}", "VideoController@get_single");
Route::get("/product/{id}", "ProductController@get_single");
//Route::get("/{id}", "PostController@get_post");

Route::get('/', array('as'=>'homepage', 'uses'=>'PostController@get_archive'));
Route::get('/archive/{type}', array('as'=>'archive', 'uses'=>'PostController@get_archive'));
