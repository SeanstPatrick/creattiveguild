<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PhotographersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = \Faker\Factory::create();

        Photographer::create([
            'name' => "Nick Reynolds",
            "phone"=> "555-555-5555",
            "email"=> "nick.reynolds@domain.co",
            "bio"=> "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ",
            "profile_picture" => "img/profile.jpeg"
        ]);
    }
}
