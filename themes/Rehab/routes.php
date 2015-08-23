<?php

Route::get("/page/{id}", "PageController@get_single");
Route::get("/video/{id}", "VideoController@get_single");
//Route::get("/{id}", "PostController@get_post");

Route::get("/", "PostController@get_archive");
Route::get("/archive/{type}", "PostController@get_archive");
