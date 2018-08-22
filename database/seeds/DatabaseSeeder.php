<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->truncate();
        $data = [
            [
                "name" => "dinhceo",
                "email" => "dinhpv@gmail.com",
                "password" => "11026789"
            ]
        ];

        \DB::table("users")->insert($data);
    }
}
