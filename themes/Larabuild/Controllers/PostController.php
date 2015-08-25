<?php namespace Themes\Larabuild\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use App\Http\Controllers\PostController as PostBaseController;
use Illuminate\Support\Facades\View;
use App\Post;
use Shortcode;

class PostController extends PostBaseController
{
    public function get_homepage(){
        $view = view::make("Theme::index");

        $posts = Post::orderby('created_at', 'desc')->get();
        $features = Post::where("type", "=", "feature")->get();

        if (Post::where("url", "=", "/")->first())
            $view->post = Post::where("url", "=", "/")->first();
        else
            die("no homepage set");

        $view->features = $features;
        $view->posts = $posts;
        return $view;
    }

    public function get_single($type, $id) {
        $post = Post::find($id);
        if($post->type != $type) die('404 error');
        $view = view::make("Theme::page");
        $view->post = $post;
        $view->post->content = Shortcode::compile($view->post->content);
        return $view;
    }

}
