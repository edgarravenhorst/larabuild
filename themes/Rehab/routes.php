<?php
use App\Post;
use Themes\Rehab\Controllers\PostController;

$posts = Post::all();
foreach($posts as $post){
    Route::get("/" . $post->url, function() use ($post) {
        $controller = new PostController();
        return $controller->get_single($post->id);
    });
};

Route::get('/', array('as'=>'homepage', 'uses'=>'PostController@get_homepage'));
Route::get("/page/{id}", "PostController@get_single");
Route::get("/jobs/{id}", "PostController@get_single");
Route::get('/archive/{type}', array('as'=>'archive', 'uses'=>'PostController@get_archive'));
