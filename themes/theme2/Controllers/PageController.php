<?php namespace Themes\theme2\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use App\Http\Controllers\PostController as PostController;
use Illuminate\Support\Facades\View;
use Themes\theme2\Models\Page as Page;

class PageController extends PostController
{
    public $type = "page";

}
