<?php

namespace Database\Factories;

use App\Models\Alumno;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alumno>
 */

class AlumnoFactory extends Factory
{
    protected $model = Alumno::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'lastname' => $this->faker->lastName(),
            'birthdate' => $this->faker->dateTime(),
            'gender' => $this->faker->title($gender = 'male'|'female'),
            'birthplace' => $this->faker->country(),
            'domicile' => $this->faker->address(),
            'home_phone' => $this->faker->phoneNumber(),
            'cell_phone' => $this->faker->tollFreePhoneNumber(),
        ];
    }

}
