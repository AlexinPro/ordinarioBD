<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Empleados>
 */
class EmpleadosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre'=> $this->faker->firstName(),
            'apellidos'=> $this->faker->lastName(),
            'telefono'=> $this->faker->phoneNumber(),
            'email'=> $this->faker->email(),
            'puesto_id'=>$this->faker->numberBetween(1,10),
        ];
    }
}
