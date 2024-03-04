<?php

namespace Database\Seeders;

use App\Models\Employeur;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Employeur::factory()->count(5)->create();
    }
}
