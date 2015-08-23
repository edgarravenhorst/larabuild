<?php namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Support\Facades\View;
use App\Post;
use Crypt;

class AdminController extends Controller
{
    public function get_index() {
        $view = view::make("admin.index");
        return $view;

    }
}
