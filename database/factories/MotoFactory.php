<?php

namespace Database\Factories;

use App\Models\Moto;
use Illuminate\Database\Eloquent\Factories\Factory;

class MotoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Moto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'marca'=> $this->faker->lastName,
            'modelo'=> $this->faker->numberBetween($min = 1980, $max = 2021),
            'color'=> $this->faker->safeColorName,
        ];
    }
}
