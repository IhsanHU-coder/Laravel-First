<?php

namespace Database\Seeders;
use App\Models\Student;
use App\Models\User;
use App\Models\ClassRoom;


use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        //$this->call(StudentSeeder::class);
        //Student::factory(10)->create();

        // User::factory()->create([
        //     'nama' => 'Test User', 
        //     'email' => 'test@gmail.com',
        // ]);

        ClassRoom::factory(5)
            ->hasStudents(5)
            ->create();

    }
}
