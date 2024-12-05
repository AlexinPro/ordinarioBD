<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Departamentos>
 */
class DepartamentosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'departamento'=> $this->faker->word(),
            'puesto_id'=> $this->faker->numberBetween(1,10),
            
        ];
    }
}
