<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Data {

    protected $table = "posts";

    protected $fillable = [
        "title",
        "content",
        "url"
    ];

}
