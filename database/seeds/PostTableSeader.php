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
        Post::create([
            "title" => "Appeltaart bakken",
            "content" => "Het meest eenvoudige appeltaart recept blijft het lekkerst. Dat gaat zeker op voor dit authentieke appeltaart recept van Koopmans. Met dit eenvoudige appeltaart recept maak je gemakkelijk deze Oudhollandse traktatie. Daar hoef je geen keukenprins of keukenprinses voor te zijn (maar dat mag natuurlijk wel). Volg het appeltaart recept op de achterkant en binnen twee uur heb je een heerlijke appeltaart op tafel staan. Ideaal als traktatie tijdens een verjaardagsfeestje voor jezelf of één van je kinderen, of gewoon zomaar, lekker bij de koffie. Met dit makkelijke appeltaart recept van Koopmans maak je iedereen blij. Jong én oud!",
            "url" => "appeltaart-bakken",
            "data" => json_encode(["optie_1" => "appel", "optie_2" => "peer"]),
            "type" => "page"
        ]);
        Post::create([
            "title" => "Lorem ipsum",
            "content" => "Lorem ipsum etc. etc.",
            "url" => "lorum-impsum",
            "data" => json_encode(["optie_1" => "water", "optie_2" => "polo"]),
            "type" => "page"
        ]);
        Post::create([
            "title" => "Pagina van type Video",
            "content" => "Het meest eenvoudige appeltaart recept blijft het lekkerst. Dat gaat zeker op voor dit authentieke appeltaart recept van Koopmans. Met dit eenvoudige appeltaart recept maak je gemakkelijk deze Oudhollandse traktatie. Daar hoef je geen keukenprins of keukenprinses voor te zijn (maar dat mag natuurlijk wel). Volg het appeltaart recept op de achterkant en binnen twee uur heb je een heerlijke appeltaart op tafel staan. Ideaal als traktatie tijdens een verjaardagsfeestje voor jezelf of één van je kinderen, of gewoon zomaar, lekker bij de koffie. Met dit makkelijke appeltaart recept van Koopmans maak je iedereen blij. Jong én oud!",
            "url" => "appeltaart-bakken",
            "data" => json_encode(["optie_1" => "appel", "optie_2" => "peer"]),
            "type" => "video"
        ]);
        Post::create([
            "title" => "Post 1",
            "content" => "Lorem ipsum etc. etc.",
            "url" => "Nullam pharetra imperdiet tempor. Aliquam erat volutpat. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed a dapibus augue. Donec suscipit lobortis dapibus. Nam felis tellus, finibus facilisis est ut, aliquet posuere urna. Quisque auctor quis magna ac vulputate. Etiam consequat nunc a leo elementum faucibus.",
            "data" => json_encode(["optie_1" => "water", "optie_2" => "polo"]),
            "type" => "post"
        ]);
        Post::create([
            "title" => "Post 2",
            "content" => "Nullam pharetra imperdiet tempor. Aliquam erat volutpat. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed a dapibus augue. Donec suscipit lobortis dapibus. Nam felis tellus, finibus facilisis est ut, aliquet posuere urna. Quisque auctor quis magna ac vulputate. Etiam consequat nunc a leo elementum faucibus.",
            "url" => "appeltaart-bakken",
            "data" => json_encode(["optie_1" => "appel", "optie_2" => "peer"]),
            "type" => "post"
        ]);
        Post::create([
            "title" => "Post 3",
            "content" => "Nullam pharetra imperdiet tempor. Aliquam erat volutpat. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed a dapibus augue. Donec suscipit lobortis dapibus. Nam felis tellus, finibus facilisis est ut, aliquet posuere urna. Quisque auctor quis magna ac vulputate. Etiam consequat nunc a leo elementum faucibus.",
            "url" => "lorum-impsum",
            "data" => json_encode(["optie_1" => "water", "optie_2" => "polo"]),
            "type" => "post"
        ]);
    }
}
