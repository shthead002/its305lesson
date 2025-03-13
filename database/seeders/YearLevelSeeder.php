<?php

namespace Database\Seeders;

use App\Models\YearLevel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class YearLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        YearLevel::insert([
            ['name' => '1st Year'],
            ['name' => '2nd Year'],
            ['name' => '3rd Year'],
            ['name' => '4th Year'],
            ['name' => '5th Year']
        ]);
    }
}
