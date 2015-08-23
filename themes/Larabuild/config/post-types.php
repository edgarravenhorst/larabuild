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
    "feature" => [
        "title" => "Features",
        "requiredParams" => [
            "excerpt" => Data::createField("textarea", "Samenvatting", "Een korte omschrijving")
        ]
    ],
);
