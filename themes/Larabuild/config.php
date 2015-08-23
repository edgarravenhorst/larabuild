<?php

//var_dump(include(__DIR__ . "/config/post-types.php"));

return array(
    "name" => "Rehab Theme",
    "namespace" => "Themes\Larabuild",

    "admin_menu" => [
        [
            "title" => "Pages",
            "type" => "page"
        ],
        [
            "title" => "Features",
            "type" => "feature"
        ],
    ],

    "post_types" => include(__DIR__ . "/config/post-types.php")
);
