<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionTypeSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('transaction_types')->insert([
            [
                'type_name' => 'Payment',
                'description' => 'Payment from any source',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type_name' => 'Withdrawal',
                'description' => 'Withdrawal from bank',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type_name' => 'Deposit',
                'description' => 'Cash deposit',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type_name' => 'Income',
                'description' => 'Income from any source',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type_name' => 'Expense',
                'description' => 'Expense for anything',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type_name' => 'Interest',
                'description' => 'Interest',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
