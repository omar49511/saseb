<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Console\View\Components\Alert;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Expediente>
 */
class ReporteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'actividades' => fake()->paragraph(2),
            'observaciones' => fake()->paragraph(3),
            'grupo' => fake()->randomElement($array = array ('grupo1', 'grupo2','grupo3','grupo4'))
        ];
    }
}
