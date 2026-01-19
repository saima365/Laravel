<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrancheSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('branches')->insert([
    [
        'name' => 'Mirpur Branch',
        'address' => 'Mirpur-10, Dhaka',
        'city' => 'Dhaka',
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'name' => 'Dhanmondi Branch',
        'address' => 'Road 27, Dhanmondi',
        'city' => 'Dhaka',
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'name' => 'Uttara Branch',
        'address' => 'Sector 7, Uttara',
        'city' => 'Dhaka',
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'name' => 'Gulshan Branch',
        'address' => 'Gulshan Avenue',
        'city' => 'Dhaka',
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'name' => 'Chittagong Branch',
        'address' => 'Agrabad Commercial Area',
        'city' => 'Chattogram',
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'name' => 'Sylhet Branch',
        'address' => 'Zindabazar',
        'city' => 'Sylhet',
        'created_at' => now(),
        'updated_at' => now(),
    ],

        ]);
    }
}
