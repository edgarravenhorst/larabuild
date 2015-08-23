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
    "video" => [
        "title" => "Videos",
        "requiredParams" => [
            "subtitle" => Data::createField("text", "Subtitel", "Hier de subtitel"),
            "video_url" => Data::createField("text", "Vimeo Url", "Hier de subtitel"),
        ]
    ],
    "product" => [
        "title" => "Producten",
        "requiredParams" => [
            "image" => Data::createField("text", "Afbeelding url", "Plak hieronder een url naar een afbeelding"),
            "price" => Data::createField("text", "Prijs", "Dit is de prijs"),
            "detail1" => Data::createField("text", "Detail 1", ""),
            "detail2" => Data::createField("text", "Detail 2", ""),
            "detail3" => Data::createField("text", "Detail 3", ""),
        ]
    ],
);
