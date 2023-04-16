<?php

namespace Database\Factories;

use App\Models\Alumno;
use App\Models\City;
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
            'name' => $this->faker->firstName(),
            'lastname' => $this->faker->lastName(),
            'birthdate' => $this->faker->dateTime(),
            'group'=> $this->faker->randomElement($array = array ('grupo1', 'grupo2','grupo3','grupo4')),
            'shift'=> $this->faker->randomElement($array = array ('Matutino', 'Vespertino')),
            'gender' => $this->faker->randomElement($array = array ('Masculino', 'Femenino')),
            // 'birthplace' => $this->faker->country(),
            'time_to_reside' => $this->faker->numerify('## años residiendo en la ciudad'),
            'domicile' => $this->faker->address(),
            'home_phone' => $this->faker->phoneNumber(),
            'cell_phone' => $this->faker->tollFreePhoneNumber(),
            'work' => $this->faker->randomElement($array = array ('si', 'no')),
            'religion'=> $this->faker->randomElement($array = array ('Cristianismo', 'Islam','Sin religión','Hinduismo','Budismo')),
            'city_id' => $this->faker->numberBetween(1,2463)
        ];
    }

}
