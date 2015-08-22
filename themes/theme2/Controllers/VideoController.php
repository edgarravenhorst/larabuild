<?php namespace Themes\theme2\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Support\Facades\View;

use App\Http\Controllers\PostController as PostController;
use App\Post as Post;
use Themes\theme2\Models\Video as Video;

class VideoController extends PostController
{
    public $type = "video";

    public function get_archive($type=false) {
        $posts = Post::where("type", "=", "video")->get();

        $view = view::make("Theme::archive");
        $view->posts = $posts;
        return $view;

    }
}
