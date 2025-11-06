<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Produto Teste 1',
                'description' => 'Produto para testes',
                'amount' => 10000, // R$ 100,00
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Produto Teste 2',
                'description' => 'Outro produto para testes',
                'amount' => 5000, // R$ 50,00
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Produto Teste 3',
                'description' => 'Produto premium',
                'amount' => 25000, // R$ 250,00
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
