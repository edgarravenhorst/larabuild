<?php

//var_dump(include(__DIR__ . "/config/post-types.php"));

return array(
    "name" => "Rehab Theme",
    "namespace" => "Themes\Rehab",

    "admin_menu" => [
        [
            "title" => "Pagina's",
            "type" => "page"
        ],
        [
            "title" => "Vacatures",
            "type" => "jobs"
        ],
        [
            "title" => "Diensten",
            "type" => "dienst"
        ],
        [
            "title" => "Projecten",
            "type" => "project"
        ],
    ],

    "post_types" => include(__DIR__ . "/config/post-types.php")
);
