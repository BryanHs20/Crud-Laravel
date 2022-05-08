<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CrudSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('crud')->insert([
            [
                'Nombre' => 'GLB 200 Progressive Line',
                'Modelo' => '2019',
                'Color' => 'Gris Montaña',
                'Precio' => '$876,900 MXN',
                'Imagen' => 'https://www.mercedes-benz.com.mx/content/dam/mb-nafta/mx/vehicles/class-global-thumbnails/MYCO20/MBMX-ALL-VEHICLES-GLB-SUV-DR.png',
                'Mercedes' => 'SUV',
            ],
            [
                'Nombre' => 'GLC 300 4MATIC Coupé',
                'Modelo' => '2020',
                'Color' => 'Blanco Polar',
                'Precio' => '$1,268,900 MXN',
                'Imagen' => 'https://www.mercedes-benz.com.mx/content/dam/mb-nafta/mx/vehicles/class-global-thumbnails/MYCO20/MBMX-ALL-VEHICLES-GLC-COUPE-DR.png',
                'Mercedes' => 'SUV',
            ],
            [
                'Nombre' => 'G 500 Biturbo',
                'Modelo' => '2021',
                'Color' => 'Designo metalizado rojo Patagonia',
                'Precio' => '$3,767,900 MXN',
                'Imagen' => 'https://www.mercedes-benz.com.mx/content/dam/mb-nafta/mx/vehicles/class-global-thumbnails/MYCO20/MBMX-ALL-VEHICLES-G-CLASS-DR.png',
                'Mercedes' => 'SUV',
            ],
            [
                'Nombre' => 'A 200 Progressive Sedán',
                'Modelo' => '2020',
                'Color' => 'Platinum Iridio',
                'Precio' => '$822,900 MXN',
                'Imagen' => 'https://www.mercedes-benz.com.mx/content/dam/mb-nafta/mx/vehicles/class-global-thumbnails/MYCO20/MBMX-ALL-VEHICLES-A-SEDAN-DR.png',
                'Mercedes' => 'SEDANE',
            ],
            [
                'Nombre' => 'CLS 350',
                'Modelo' => '2018',
                'Color' => 'Azul Denim',
                'Precio' => '$1,316,900 MXN',
                'Imagen' => 'https://www.mercedes-benz.com.mx/content/dam/mb-nafta/mx/vehicles/class-global-thumbnails/MYCO20/MBMX-ALL-VEHICLES-CLS-350-DR.png',
                'Mercedes' => 'COUPE',
            ],
            [
                'Nombre' => 'EQC 400 4MATIC Sport',
                'Modelo' => '2019',
                'Color' => 'Negro Cosmos',
                'Precio' => '$1,899,000 MXN',
                'Imagen' => 'https://www.mercedes-benz.com.mx/content/dam/mb-nafta/mx/vehicles/class-global-thumbnails/MYCO20/MBMX-ALL-VEHICLES-EQC-400-DR.png',
                'Mercedes' => 'EQ',
            ],
            [
                'Nombre' => 'AMG GT 53 4MATIC',
                'Modelo' => '2021',
                'Color' => 'Azul Espectra',
                'Precio' => '$2,459,900 MXN',
                'Imagen' => 'https://www.mercedes-benz.com.mx/content/dam/mb-nafta/mx/vehicles/class-global-thumbnails/MYCO20/MBMX-ALL-VEHICLES-AMG-GT-53-DR.png',
                'Mercedes' => 'COUPE',
            ],
            [
                'Nombre' => 'CLA 200 Progressive Line',
                'Modelo' => '2019',
                'Color' => 'Azul Cavansita',
                'Precio' => '$825,900 MXN',
                'Imagen' => 'https://www.mercedes-benz.com.mx/content/dam/mb-nafta/mx/vehicles/class-global-thumbnails/MYCO20/MBMX-ALL-VEHICLES-CLA-200-DR.png',
                'Mercedes' => 'COUPE',
            ],
            [
                'Nombre' => 'EQB 300 4MATIC',
                'Modelo' => '2020',
                'Color' => 'Negro',
                'Precio' => '$1,334,900 MXN',
                'Imagen' => 'https://www.mercedes-benz.com.mx/content/dam/mb-nafta/mx/vehicles/class-global-thumbnails/MYCO20/MBMX-ALL-VEHICLES-EQB-300-DR.png',
                'Mercedes' => 'EQ',
            ],
            [
                'Nombre' => 'GLE 450 4MATIC Line Coupé',
                'Modelo' => '2020',
                'Color' => 'Negro Obsidiana',
                'Precio' => '$1,654,900 MXN',
                'Imagen' => 'https://www.mercedes-benz.com.mx/content/dam/mb-nafta/mx/MYCO/MY21/GLE/COUPE/cgt/MBMX-ALL-VEHICLES-GLE-COUPE-2021-1-DR.png',
                'Mercedes' => 'SUV',
            ]
        ]);

    }
}
