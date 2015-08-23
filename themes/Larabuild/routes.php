<?php

Route::get('/', array('as'=>'homepage', 'uses'=>'PostController@get_homepage'));
Route::get("/{type}/{id}", "PostController@get_single");
//Route::get('/archive/{type}', array('as'=>'archive', 'uses'=>'PostController@get_archive'));
