<?php namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Support\Facades\View;
use App\Post;
use Input;
use Validator;
use Redirect;
use Shortcode;
//

class PostController extends DataController
{
    public $model = Post::class;
    public $type = "post";

    public function get_post($id) {
        $post = Post::find($id);

        $view = view::make("Theme::" . $post->type);
        $view->post = $post;
        return $view;

    }

    public function get_single($type="post", $id) {
        $post = Post::find($id);

        if (!$post || $post->type != $this->type) {
            //abort(404);
        }else {
            $view = view::make("Theme::" . $post->type);
            $view->post = $post;
            return $view;
        }
    }

    public function get_archive($type=false) {
        if ($type)
            $posts = Post::where("type", "=", $type)->get();
        else
            $posts = Post::all();

        $view = view::make("Theme::archive");
        $view->post_type = $type;
        $view->posts = $posts;
        return $view;

    }

    public function get_admin_archive($type=false) {

        if ($type)
            $posts = Post::where("type", "=", $type)->get();
        else
            $posts = Post::all();

        $view = view::make("admin.posts.index");
        $view->post_type = $type;
        $view->posts = $posts;
        return $view;

    }

    public function get_new($type){
        $view = View::make('admin.posts.new');
        $view->post_type = $type;
        $view->post = new Post();
        $view->post->type = $type;
        return $view;
    }

    public function get_edit($id){
        $view = View::make('admin.posts.edit');
        $view->title = 'Instellingen';
        $view->post = Post::find($id);
        $view->custom_fields = $view->post->get_admin_fields();
        return $view;
    }

    public function post_new(){
        $input = Input::all();

        $rules = array(
            'title' => 'required',
        );

        $validator = Validator::make($input, $rules);

        if($validator->passes()){

            $post = new Post();
            $post->title = $input['title'];
            $post->url = $input['url'];
            $post->content = $input['content'];
            $post->type = $input['type'];
            $post->save();

            return Redirect::route('post_type_index', ["type" => $post->type]);
        }else {
            return Redirect::back()->withInput()->withErrors($validator);
        }
    }

    public function post_update(){
        $input = Input::all();

        $rules = array(
            'title' => 'required',
        );

        $validator = Validator::make($input, $rules);

        if($validator->passes()){

            $post = Post::find($input['id']);
            $post->title = $input['title'];
            $post->url = $input['url'];
            $post->content = $input['content'];
            $post->set_data($input, "data_");
            $post->save();

            return Redirect::route('post_type_index', ["type" => $post->type]);
        }else {
            return Redirect::back()->withInput()->withErrors($validator);
        }
    }

    public function post_remove() {
        Post::find(Input::get('id'))->delete();
        return Redirect::back();
    }


    public function postShortcode($attr, $content = null, $name = null) {
        $post = Post::find($attr['id']);
        $view = view::make("shortcode.post");
        $view->post = $post;
        $view->post->content = Shortcode::compile($view->post->content);

        return $view;
        return '<img src="'.$src.'">';
    }
}
Shortcode::register('post', 'App\Http\Controllers\PostController@postShortcode');
