<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Component;
class ComponentTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Component::create([
            "title" => "Component 1",
            "data" => json_encode(["optie_1" => "appel", "optie_2" => "peer"])
        ]);
        Component::create([
            "title" => "Component 2",
            "data" => json_encode(["optie_1" => "water", "optie_2" => "polo"])
        ]);
    }
}
