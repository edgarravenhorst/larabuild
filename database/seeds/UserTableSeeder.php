<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;
class UserTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name" => "Edgar Ravenhorst",
            "username" => "edgar",
            "email" => "edgar@code.rehab",
            'password' => bcrypt('pass'),
        ]);
        User::create([
            "name" => "Mathijs Jansen",
            "username" => "mathijs",
            "email" => "mathijs@code.rehab",
            'password' => bcrypt('pass'),
        ]);
    }
}
