<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PacienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'documento' => $this->faker->unique()->numberBetween(100000000,9999999999),
            'nombre' => $this->faker->firstname(),
            'apellido' => $this->faker->lastname(),
            'telefono' =>  $this->faker->phoneNumber(),
            'email' => $this->faker->unique()->safeEmail(),
        
        ];
    }
}
