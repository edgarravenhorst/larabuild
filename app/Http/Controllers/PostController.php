<?php namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Support\Facades\View;
use App\Post;

View::addNamespace('Theme', base_path() . '/themes/rehab/views');
View::addLocation(base_path() . '/themes/rehab/views/');

class PostController extends Controller
{

    public $type = "post";

    public function get_post($id) {
        $post = Post::find($id);

        $view = view::make("Theme::" . $post->type);
        $view->data = $post;
        return $view;

    }

    public function get_single($id) {
        $post = Post::find($id);

        if (!$post || $post->type != $this->type) {
            //abort(404);
        }else {
            $view = view::make("Theme::" . $post->type);
            $view->data = $post;
            return $view;
        }
    }

    public function get_archive($type=false) {
        if ($type)
            $posts = Post::where("type", "=", $type);
        else
            $posts = Post::all();

        $view = view::make("Theme::archive");
        $view->posts = $posts;
        return $view;

    }
}
