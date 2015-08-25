<?php
use App\Data;

return array(
    "page" => [
        "title" => "Pages",
        "requiredParams" => [
            "subtitle" => Data::createField("text", "Subtitel", "Hier de subtitel"),
            "excerpt" => Data::createField("textarea", "Samenvatting", "Een korte omschrijving")
        ]
    ],
    "jobs" => [
        "title" => "Vacatures",
        "requiredParams" => [
            "subtitle" => Data::createField("text", "Subtitel", "Hier de subtitel")
        ]
    ],
);
