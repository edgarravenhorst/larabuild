<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Component {

    protected $table = "posts";

    protected $fillable = [
        "title",
        "content",
        "url"
    ];

}
