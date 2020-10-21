<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cat;

class CatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //factory(App\Models\Cat::class,500)->create();
        Cat::factory()->count(500)->create();

    }
}
