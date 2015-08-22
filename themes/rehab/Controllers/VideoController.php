<?php namespace Themes\rehab\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use App\Http\Controllers\PostController as PostController;
use Illuminate\Support\Facades\View;
use Themes\rehab\Models\Video as Video;

class VideoController extends PostController
{
    public $type = "video";

}
