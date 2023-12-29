<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
  
public function run()
{
    // Insert a new patient with ID_Patient equal to 1
    DB::table('patient')->insert([
        'ID_Patient' => 1,
        'name' => 'John Doe',
        'email' => 'john@example.com',
        'created_at' => now(),
        'updated_at' => now(),
    ]);
}

    }

