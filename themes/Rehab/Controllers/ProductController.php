<?php namespace Themes\rehab\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use App\Http\Controllers\PostController as PostController;
use Illuminate\Support\Facades\View;

class ProductController extends PostController
{
    public $type = "product";

}
