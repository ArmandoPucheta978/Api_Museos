<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HorariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('horarios')->insert([
            // Horarios para museo 1
            ['museo_id' => 1, 'dia_semana' => 'Lunes', 'hora_apertura' => '10:00:00', 'hora_cierre' => '16:45:00', 'created_at' => now(), 'updated_at' => now()],
            ['museo_id' => 1, 'dia_semana' => 'Martes', 'hora_apertura' => '10:00:00', 'hora_cierre' => '16:45:00', 'created_at' => now(), 'updated_at' => now()],
            ['museo_id' => 1, 'dia_semana' => 'Miércoles', 'hora_apertura' => '10:00:00', 'hora_cierre' => '16:45:00', 'created_at' => now(), 'updated_at' => now()],
            ['museo_id' => 1, 'dia_semana' => 'Jueves', 'hora_apertura' => '10:00:00', 'hora_cierre' => '16:45:00', 'created_at' => now(), 'updated_at' => now()],
            ['museo_id' => 1, 'dia_semana' => 'Viernes', 'hora_apertura' => '10:00:00', 'hora_cierre' => '16:45:00', 'created_at' => now(), 'updated_at' => now()],
            ['museo_id' => 1, 'dia_semana' => 'Sábado', 'hora_apertura' => '10:00:00', 'hora_cierre' => '16:45:00', 'created_at' => now(), 'updated_at' => now()],
            ['museo_id' => 1, 'dia_semana' => 'Domingo', 'hora_apertura' => '10:00:00', 'hora_cierre' => '16:45:00', 'created_at' => now(), 'updated_at' => now()],
            // Horarios para museo 2
            ['museo_id' => 2, 'dia_semana' => 'Lunes', 'hora_apertura' => '00:00:00', 'hora_cierre' => '17:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['museo_id' => 2, 'dia_semana' => 'Martes', 'hora_apertura' => '09:00:00', 'hora_cierre' => '17:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['museo_id' => 2, 'dia_semana' => 'Miércoles', 'hora_apertura' => '09:00:00', 'hora_cierre' => '17:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['museo_id' => 2, 'dia_semana' => 'Jueves', 'hora_apertura' => '09:00:00', 'hora_cierre' => '17:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['museo_id' => 2, 'dia_semana' => 'Viernes', 'hora_apertura' => '09:00:00', 'hora_cierre' => '17:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['museo_id' => 2, 'dia_semana' => 'Sábado', 'hora_apertura' => '09:00:00', 'hora_cierre' => '17:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['museo_id' => 2, 'dia_semana' => 'Domingo', 'hora_apertura' => '09:00:00', 'hora_cierre' => '17:00:00', 'created_at' => now(), 'updated_at' => now()],
            // Horarios para museo 3
            ['museo_id' => 3, 'dia_semana' => 'Lunes', 'hora_apertura' => '09:00:00', 'hora_cierre' => '16:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['museo_id' => 3, 'dia_semana' => 'Martes', 'hora_apertura' => '09:00:00', 'hora_cierre' => '16:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['museo_id' => 3, 'dia_semana' => 'Miércoles', 'hora_apertura' => '09:00:00', 'hora_cierre' => '16:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['museo_id' => 3, 'dia_semana' => 'Jueves', 'hora_apertura' => '09:00:00', 'hora_cierre' => '16:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['museo_id' => 3, 'dia_semana' => 'Viernes', 'hora_apertura' => '09:00:00', 'hora_cierre' => '16:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['museo_id' => 3, 'dia_semana' => 'Sábado', 'hora_apertura' => '09:00:00', 'hora_cierre' => '16:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['museo_id' => 3, 'dia_semana' => 'Domingo', 'hora_apertura' => '09:00:00', 'hora_cierre' => '16:00:00', 'created_at' => now(), 'updated_at' => now()],
            // Horarios para museo 4
            ['museo_id' => 4, 'dia_semana' => 'Lunes', 'hora_apertura' => '00:00:00', 'hora_cierre' => '16:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['museo_id' => 4, 'dia_semana' => 'Martes', 'hora_apertura' => '09:00:00', 'hora_cierre' => '16:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['museo_id' => 4, 'dia_semana' => 'Miércoles', 'hora_apertura' => '09:00:00', 'hora_cierre' => '16:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['museo_id' => 4, 'dia_semana' => 'Jueves', 'hora_apertura' => '09:00:00', 'hora_cierre' => '16:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['museo_id' => 4, 'dia_semana' => 'Viernes', 'hora_apertura' => '09:00:00', 'hora_cierre' => '16:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['museo_id' => 4, 'dia_semana' => 'Sábado', 'hora_apertura' => '09:00:00', 'hora_cierre' => '16:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['museo_id' => 4, 'dia_semana' => 'Domingo', 'hora_apertura' => '09:00:00', 'hora_cierre' => '16:00:00', 'created_at' => now(), 'updated_at' => now()],
            // Horarios para museo 5
            ['museo_id' => 5, 'dia_semana' => 'Lunes', 'hora_apertura' => '00:00:00', 'hora_cierre' => '00:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['museo_id' => 5, 'dia_semana' => 'Martes', 'hora_apertura' => '10:00:00', 'hora_cierre' => '16:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['museo_id' => 5, 'dia_semana' => 'Miércoles', 'hora_apertura' => '10:00:00', 'hora_cierre' => '16:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['museo_id' => 5, 'dia_semana' => 'Jueves', 'hora_apertura' => '10:00:00', 'hora_cierre' => '16:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['museo_id' => 5, 'dia_semana' => 'Viernes', 'hora_apertura' => '10:00:00', 'hora_cierre' => '16:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['museo_id' => 5, 'dia_semana' => 'Sábado', 'hora_apertura' => '00:00:00', 'hora_cierre' => '16:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['museo_id' => 5, 'dia_semana' => 'Domingo', 'hora_apertura' => '00:00:00', 'hora_cierre' => '00:00:00', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
