<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker()->name(),
            'nim' => $this->faker()->randomNumber(mt_rand(5,5)),
            'alamat' => $this->faker()->streetAddress(),
            'no_tlp' => $this->faker()->phoneNumber(),
            'email' => $this->faker()->safeEmail(),
            'nama_ortu' => $this->faker()->name(),
            'classroom_id' =>1,
            'group_id'=>1
        ];
    }
}
