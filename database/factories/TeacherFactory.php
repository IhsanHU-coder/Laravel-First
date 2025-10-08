<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Subject;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class TeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => fake()->name(),
            'subject_id' => Subject::factory(),
            // 'subject_id' => fake()->randomElement([
            //     'MTK',
            //     'PAI',
            //     'ANDROID',
            //     'GAME',
            //     'INGGRIS',
            // ]),
            'phone' => fake()->phoneNumber(),
            //'email' => fake()->unique()->safeEmail(),
            'address' => fake()->address(),
        ];
    }
}
