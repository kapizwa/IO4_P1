<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Zamowienia;

class zamowieniaTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $zamowienia=[
        [   'id' => 1,
            'data' => '2022-11-10',
            'adres_wysylki' => 'Kraków, Topolowa 8',
            'book_id' => 2,
            'user_id' => 6,
        ],

        [   'id' => 2,
            'data' => '2022-11-11',
            'adres_wysylki' => 'Warszawa Okęcie 51b/25',
            'book_id' => 2,
            'user_id' => 6,
        ],

        [   'id' => 3,
            'data' => '2022-11-12',
            'adres_wysylki' => 'Nowy Sącz 51b/5',
            'book_id' => 2,
            'user_id' => 6,
        ],

        ];
        Zamowienia::insert($zamowienia);
    }
}
