<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MuseoTipoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('museo_tipo')->insert([
            ['museo_id' => 1, 'tipo_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['museo_id' => 1, 'tipo_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['museo_id' => 2, 'tipo_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['museo_id' => 3, 'tipo_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['museo_id' => 3, 'tipo_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['museo_id' => 4, 'tipo_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['museo_id' => 4, 'tipo_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['museo_id' => 5, 'tipo_id' => 8, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
