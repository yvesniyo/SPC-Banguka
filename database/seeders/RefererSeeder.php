<?php

namespace Database\Seeders;

use App\Models\Referer;
use Illuminate\Database\Seeder;

class RefererSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Referer::factory(500)->create();
    }
}
