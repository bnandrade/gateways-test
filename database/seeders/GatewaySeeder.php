<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GatewaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('gateways')->insert([
            [
                'name' => 'Gateway 1',
                'type' => 'gateway1',
                'is_active' => true,
                'priority' => 1,
                'credentials' => json_encode([
                    'email' => 'dev@betalent.tech',
                    'token' => 'FEC9BB078BF338F464F96B48089EB498'
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Gateway 2',
                'type' => 'gateway2',
                'is_active' => true,
                'priority' => 2,
                'credentials' => json_encode([
                    'token' => 'tk_f2198cc671b5289fa856',
                    'secret' => '3d15e8ed6131446ea7e3456728b1211f'
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
