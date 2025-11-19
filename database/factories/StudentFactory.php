<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\ClassRoom;

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
    public function definition(): array
    {
        
        return [
            'name' => fake() ->name(), // Nama lengkap
            'birthday' => fake()->date('Y-m-d', '2010-01-01'), // Tanggal lahir (format Y-m-d)
            'classroom_id' => ClassRoom::factory(),
            // 'grade' => fake()->randomElement([
            //     '11 PPLG 1',
            //     '11 PPLG 2',
            //     '11 PPLG 3',
            //     '12 PPLG 1',
            //     '12 PPLG 2',
            //     '12 PPLG 3',
            // ]),
            'email' => fake()->unique()->safeEmail(), // Email unik
            'address' => fake()->address(), //Alamat Lengkap
        ];
    }
}
