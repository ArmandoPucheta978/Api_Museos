<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MuseosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('museos')->insert([
            [
                'nombre' => 'Museo del Hombre Tepexpan.',
                'ubicacion' => 'Carr. México-Teotihuacán Km. 32, Col. Anáhuac, CP 55855, Tepexpan, Acolman.',
                'ciudad' => 'Estado de México',
                'pais' => 'México',
                'costo_entrada' => 0.00,
                'descripcion' => 'El Museo Prehistórico de Tepexpan fue inaugurado en 1955. Su colección es esencialmente paleontológica y de lítica. Se exponen los aspectos prehistóricos de la cuenca de México con base en los restos óseos de animales y humanos encontrados en el sitio.',
                'contacto' => '594 957 02 23',
                'sitio_web' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Centro Comunitario Ecatepec Museo Casa de Morelos.',
                'ubicacion' => 'Antigua, Carr. Federal Pachuca - Mexico S/N, San Juan Alcahuacan, 55040.',
                'ciudad' => 'Estado de México',
                'pais' => 'México',
                'costo_entrada' => 0.00,
                'descripcion' => 'La antigua Casa de los Virreyes —en la que se recibió a Bucareli—, a donde se llevó a fusilar a don José María Morelos en 1815, exhibe una nutrida colección referida al prócer. Los pisos superiores se destinan a exposiciones temporales. Muestra también una notable osamenta de mamut.',
                'contacto' => '',
                'sitio_web' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Museo de Murales Teotihuacanos Beatriz de la Fuente.',
                'ubicacion' => 'Autopista Ecatepec-Pirámides km 22 +600, Col. Teotihuacán, CP 55804,San Martín de las Pirámides, San Martín de las Pirámides.',
                'ciudad' => 'Estado de México',
                'pais' => 'México',
                'costo_entrada' => 85.00,
                'descripcion' => 'El museo exhibe los murales recuperados a lo largo de más de un siglo de excavaciones en la zona arqueológica. Fue inaugurado como Museo de la Pintura Teotihuacana y reestructurado en 2006, cuando se le cambió de nombre. Cuenta con una sala anexa para exposiciones temporales.',
                'contacto' => '594 958 20 81',
                'sitio_web' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Museo Militar de Aviación.',
                'ubicacion' => 'Carretera Federal México- Pachuca, en el interior de la “Base Aérea Militar No. 1”, Santa Lucía.',
                'ciudad' => 'Estaado de México',
                'pais' => 'México',
                'costo_entrada' => 0.00,
                'descripcion' => 'La obra museística se encuentra representada por una exposición permanente de aeronaves, vehículos, piezas únicas, documentos, fotografías y esculturas, que proporcionan al visitante la oportunidad de recorrer los pasajes y hechos gloriosos de la Fuerza Aérea Mexicana, como elemento activo y constante de la historia nacional.',
                'contacto' => 'sdnfam02@mail.sedena.gob.mx',
                'sitio_web' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Museo Paleontológico de Santa Lucía Quinamétzin.',
                'ubicacion' => 'Carr. Federal México- Pachuca Santa Lucía, Base Aérea Militar Campo Militar 37 D ,General P.A. Alfredo Lezama Álvarez, CP 55640, Zumpango de Ocampo, Zumpango.',
                'ciudad' => 'Cuidad de México',
                'pais' => 'México',
                'costo_entrada' => 0.00,
                'descripcion' => 'Fue inaugurado por el presidente Andrés Manuel López Obrador. El museo forma parte de las instalaciones del Aeropuerto Internacional Felipe Ángeles. Se encuentra conformado por seis salas que abordan temáticas como la historia geológica de la región, todo sobre los mamuts, la biodiversidad de la zona, la interacción de los humanos con los mamuts, el imaginario cultural que generaron estos animales y la reproducción de los lugares de hallazgo.',
                'contacto' => '',
                'sitio_web' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
