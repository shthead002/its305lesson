<?php

namespace Database\Seeders;

use App\Models\Suffix;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SuffixSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Suffix::insert([
            ['name' => 'Jr.'],
            ['name' => 'Sr.'],
            ['name' => 'I'],
            ['name' => 'II'],
            ['name' => 'III']
        ]);
    }
}
