<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contact::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre:'=> $this->faker->firstName,
            'apellido:'=> $this->faker->lastName,
            'email'=> $this->faker->safeEmail,
            'ocupacion'=> $this->faker->jobTitle,
            'ciudad'=> $this->faker->city,
            'pais'=> $this->faker->country,
        ];
    }
}
