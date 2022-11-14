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
            'id' => 1,
            'data' => '2022-11-14',
            'adres_wysylki' => 'Warszawa Okęcie 51b/25',
            'book_id' => 2,
            'user_id' => 6,
        ];
        Zamowienia::insert($zamowienia);
    }
}
