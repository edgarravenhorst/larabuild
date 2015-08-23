<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Component extends Data {
    protected $table = "components";
    protected $fillable = [
        "title",
        "params",
        "view"
    ];
}
