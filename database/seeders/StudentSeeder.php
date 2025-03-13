<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::insert([
            [
                'student_no' => '2000123532',
                'first_name' => 'Arvin',
                'middle_name' => 'Wolfe',
                'last_name' => 'Pacunla',
                'suffix_id' => 2,
                'contact_no' => '312433213',
                'email' => 'arvin@gmail.com',
                'address' => 'DGTE',
                'year_level_id' => 5,
                'status_id' => 5
            ],
            [
                'student_no' => '2000123534',
                'first_name' => 'Neil',
                'middle_name' => 'Cadalso',
                'last_name' => 'Goat',
                'suffix_id' => null,
                'contact_no' => '2445532421',
                'email' => 'neil@gmail.com',
                'address' => 'DGTE',
                'year_level_id' => 4,
                'status_id' => 3
            ]
        ]);
    }
}
