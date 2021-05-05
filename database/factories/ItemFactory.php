<?php

namespace Database\Factories;

use App\Models\Item;
use Illuminate\Database\Eloquent\Factories\Factory;

class ItemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Item::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $quantity = $this->faker->numberBetween($min = 1, $max = 9);
        $cu_materials = $this->faker->randomFloat($nbMaxDecimals = NULL, $min = 100, $max = 2000);
        $cu_labor = $this->faker->randomFloat($nbMaxDecimals = NULL, $min = 0.00, $max = 100);

        return [
            'name'=> $this->faker->word,
            'unit'=> $this->faker->randomElement($array = array ('m2','no','ml','m3','kg')),
            'quantity'=> $quantity,
            'cu_materials' => $cu_materials,
            'cu_labor' => $cu_labor,
            'amount' => ($quantity * $cu_materials) + ($quantity * $cu_labor),
        ];
    }
}
