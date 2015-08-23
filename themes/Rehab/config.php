<?php

//var_dump(include(__DIR__ . "/config/post-types.php"));

return array(
    "name" => "Rehab Theme",
    "namespace" => "Themes\Rehab",

    "admin_menu" => [
        [
            "title" => "Pages",
            "type" => "page"
        ],
        [
            "title" => "Videos",
            "type" => "video"
        ],
        [
            "title" => "Products",
            "type" => "product"
        ],
    ],

    "post_types" => include(__DIR__ . "/config/post-types.php")
);
