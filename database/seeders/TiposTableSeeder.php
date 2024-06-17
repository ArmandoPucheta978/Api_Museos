<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TiposTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tipos')->insert([
            ['nombre' => 'Arte', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Arqueológico', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Argricultura', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Historia', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Ciencia', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Tecnología', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Monográfico', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Otro', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
