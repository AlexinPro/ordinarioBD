<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Capacitaciones>
 */
class CapacitacionesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'capacitacion'=> $this->faker->text(15),
            'descripcion'=>$this->faker->text(80),
            'duracion'=>$this->faker->text('10'),
            'empleado_id'=>$this->faker->numberBetween(1,10)
        ];
    }
}
