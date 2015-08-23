<?php

$app->get("/page/{id}", "PageController@get_single");
$app->get("/video/{id}", "VideoController@get_single");
//$app->get("/{id}", "PostController@get_post");

$app->get("/", "PostController@get_archive");
$app->get("/archive/{type}", "PostController@get_archive");
