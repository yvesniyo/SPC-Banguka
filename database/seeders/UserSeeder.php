<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {


        User::factory(1)->create([
            'id' => 1,
            "name" => "Admininstrator",
            "email" => "admin@admin.com",
            'role_id' => 1,
        ]);


        User::factory(5)->create([
            "role_id" => 2
        ]);
    }
}