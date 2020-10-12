<?php

namespace Database\Factories;

use App\Models\Cat;
use Illuminate\Database\Eloquent\Factories\Factory;

class CatFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cat::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'breed_id'=>rand(1,50),
            'name'=> $this->faker->sentence($nbWords=1,$variableNbWords=true),
            'date_of_birth'=> $this->faker->date($format='Y-m-d',$max='now'),
            'gender'=> $this->faker->randomElement(['MACHO','HEMBRA']),
            'photo'=> $this->faker->imageUrl($width=80,$height=60,'cats'),
        ];
    }
}
