<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Post;
class PostTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $field = new StdClass();
        $field->type = "text";
        $field->name = "indredient1";
        $field->title = "Ingredient 1";
        $field->description = "Dit is de omschrijving";
        $field->validation = "required";
        $field->value = "Appels";

        $field1 = new StdClass();
        $field1->type = "textarea";
        $field1->name = "indredient2";
        $field1->title = "Indredient 2";
        $field1->description = "Dit is de omschrijving";
        $field1->validation = "required";
        $field1->value = "Bloem";

        $field2 = new StdClass();
        $field2->type = "hidden";
        $field2->name = "indredient3";
        $field2->title = "Indredient 3";
        $field2->description = "Dit is de omschrijving";
        $field2->validation = "required";
        $field2->value = "Kaneel";

        $data = array(
            'indredient1' => $field,
            'indredient2' => $field1,
            'indredient3' => $field2,
        );

        Post::create([
            "title" => "Appeltaart bakken",
            "content" => "Het meest eenvoudige appeltaart recept blijft het lekkerst. Dat gaat zeker op voor dit authentieke appeltaart recept van Koopmans. Met dit eenvoudige appeltaart recept maak je gemakkelijk deze Oudhollandse traktatie. Daar hoef je geen keukenprins of keukenprinses voor te zijn (maar dat mag natuurlijk wel). Volg het appeltaart recept op de achterkant en binnen twee uur heb je een heerlijke appeltaart op tafel staan. Ideaal als traktatie tijdens een verjaardagsfeestje voor jezelf of één van je kinderen, of gewoon zomaar, lekker bij de koffie. Met dit makkelijke appeltaart recept van Koopmans maak je iedereen blij. Jong én oud!",
            "url" => "appeltaart-bakken",
            "data" => "",
            "type" => "page"
        ]);
        Post::create([
            "title" => "Lorem ipsum",
            "content" => "Lorem ipsum etc. etc.",
            "url" => "lorum-impsum",
            "data" => "",
            "type" => "page"
        ]);
        Post::create([
            "title" => "Pagina van type Video",
            "content" => "Het meest eenvoudige appeltaart recept blijft het lekkerst. Dat gaat zeker op voor dit authentieke appeltaart recept van Koopmans. Met dit eenvoudige appeltaart recept maak je gemakkelijk deze Oudhollandse traktatie. Daar hoef je geen keukenprins of keukenprinses voor te zijn (maar dat mag natuurlijk wel). Volg het appeltaart recept op de achterkant en binnen twee uur heb je een heerlijke appeltaart op tafel staan. Ideaal als traktatie tijdens een verjaardagsfeestje voor jezelf of één van je kinderen, of gewoon zomaar, lekker bij de koffie. Met dit makkelijke appeltaart recept van Koopmans maak je iedereen blij. Jong én oud!",
            "url" => "appeltaart-bakken",
            "data" => "",
            "type" => "video"
        ]);
        Post::create([
            "title" => "Post 1",
            "content" => "Lorem ipsum etc. etc.",
            "url" => "Nullam pharetra imperdiet tempor. Aliquam erat volutpat. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed a dapibus augue. Donec suscipit lobortis dapibus. Nam felis tellus, finibus facilisis est ut, aliquet posuere urna. Quisque auctor quis magna ac vulputate. Etiam consequat nunc a leo elementum faucibus.",
            "data" => "",
            "type" => "post"
        ]);
        Post::create([
            "title" => "Post 2",
            "content" => "Nullam pharetra imperdiet tempor. Aliquam erat volutpat. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed a dapibus augue. Donec suscipit lobortis dapibus. Nam felis tellus, finibus facilisis est ut, aliquet posuere urna. Quisque auctor quis magna ac vulputate. Etiam consequat nunc a leo elementum faucibus.",
            "url" => "appeltaart-bakken",
            "data" => "",
            "type" => "post"
        ]);
        Post::create([
            "title" => "Post 3",
            "content" => "Nullam pharetra imperdiet tempor. Aliquam erat volutpat. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed a dapibus augue. Donec suscipit lobortis dapibus. Nam felis tellus, finibus facilisis est ut, aliquet posuere urna. Quisque auctor quis magna ac vulputate. Etiam consequat nunc a leo elementum faucibus.",
            "url" => "lorum-impsum",
            "data" => "",
            "type" => "post"
        ]);
    }
}
