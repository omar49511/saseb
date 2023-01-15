<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Console\View\Components\Alert;
use App\Models\Alumno;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Expediente>
 */
class ExpedienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'alumno_id' => Alumno::factory(),
            'user_id' => User::factory(),
            'motivo_consulta' => fake()->paragraph(2),
            'descripcion' => fake()->paragraph(3)
        ];
    }
}
