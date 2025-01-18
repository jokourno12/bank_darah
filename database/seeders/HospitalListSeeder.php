<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HospitalListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hospitalLists = [
            ['namaRS' => 'RSUP Dr. Sardjito',
             'alamat' => 'Daerah Istimewa Yogyakarta, Indonesia',
             'kontak' => '+62 555-555-5555',
             'stokA' => 4,
             'stokB' => 6,
             'stokAB' => 1,
             'stokO' => 9
            ],

            ['namaRS' => 'RSUP Dr. Hasan Sadikin ',
            'alamat' => 'Jawa Barat, Indonesia',
            'kontak' => '+62 444-444-4444',
            'stokA' => 1,
            'stokB' => 2,
            'stokAB' => 4,
            'stokO' => 3
            ],

            ['namaRS' => 'RSUP Prof. Dr. R. D. Kandou',
            'alamat' => 'Jawa Barat, Indonesia',
            'kontak' => '+62 333-333-3333',
            'stokA' => 5,
            'stokB' => 3,
            'stokAB' =>4,
            'stokO' => 3
            ],

            ['namaRS' => 'RSUP Dr. M. Djamil',
            'alamat' => 'Sumatera Barat, Indonesia',
            'kontak' => '+62 222-222-2222',
            'stokA' => 2,
            'stokB' => 3,
            'stokAB' => 1,
            'stokO' => 6
            ],

            ['namaRS' => 'RSUP Dr. Hasan Sadikin',
            'alamat' => 'Jawa Barat, Indonesia',
            'kontak' => '+62 111-111-1111',
            'stokA' => 5,
            'stokB' => 2,
            'stokAB' => 1,
            'stokO' => 4
            ],
        ];

        DB::table('hospitals')->insert($hospitalLists);

    }
}
