<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('customers')->insert([
            
                [
                "name" => "Rahim Uddin",
                "email" => "rahim.uddin@example.com",
                "phone" => "01711-234567",
                "address" => "Mirpur, Dhaka"
            ],
            [
                "name" => "Karim Ahmed",
                "email" => "karim.ahmed@example.com",
                "phone" => "01822-345678",
                "address" => "Banani, Dhaka"
            ],
            [
                "name" => "Sara Akter",
                "email" => "sara.akter@example.com",
                "phone" => "01633-456789",
                "address" => "Uttara, Dhaka"
            ],
            [
                "name" => "Jamil Hasan",
                "email" => "jamil.hasan@example.com",
                "phone" => "01555-567890",
                "address" => "Chattogram"
            ],
            [
                "name" => "Nadia Islam",
                "email" => "nadia.islam@example.com",
                "phone" => "01966-678901",
                "address" => "Sylhet"
            ],
            [
                "name" => "Imran Hossain",
                "email" => "imran.hossain@example.com",
                "phone" => "01744-789012",
                "address" => "Rajshahi"
            ],
            [
                "name" => "Mitu Chowdhury",
                "email" => "mitu.chowdhury@example.com",
                "phone" => "01899-890123",
                "address" => "Khulna"
            ],
            [
                "name" => "Sajib Paul",
                "email" => "sajib.paul@example.com",
                "phone" => "01655-901234",
                "address" => "Barishal"
            ],
            [
                "name" => "Lamia Khatun",
                "email" => "lamia.khatun@example.com",
                "phone" => "01522-012345",
                "address" => "Rangpur"
            ],
            [
                "name" => "Fahim Rahman",
                "email" => "fahim.rahman@example.com",
                "phone" => "01977-123450",
                "address" => "Cumilla"
            ] 
        ]);
        
    }
}
