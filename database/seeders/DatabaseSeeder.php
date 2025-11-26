<?php

namespace Database\Seeders;
use App\Models\Student;
use App\Models\User;
use App\Models\ClassRoom;
use App\Models\Teacher;
use App\Models\Subject;
use App\Models\Guardian;


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
            ->hasStudents()
            ->create();
        
        Guardian::factory()->count(10)->create();
        // Subject::factory(5)
        //     ->hasTeachers(1)
        //     ->create();
        // Teacher::factory(5)
        // ->hasSubject(1)
        // ->create();

    }
}
