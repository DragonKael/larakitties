<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //creo 10 usuarios
        User::factory()->count(10)->create();

        //factory(App\Models\User::class,10)->create();
        //
        User::create([
            'name'=>'Luis DKT Salas',
            'email'=>'sofichin3000@hotmail.com',
            'password'=>bcrypt('100%f0r3v3r@l0n3')
        ]);
    }
}
