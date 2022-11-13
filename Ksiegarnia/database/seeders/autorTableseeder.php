<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Autor;

class autorTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $autors=[
            [
                'id' => 1,
                'imie' => 'Autor',
                'nazwisko' => '1',
                'data_ur' => '1798-12-24',
            ],
            [
                'id' => 2,
                'imie' => 'Autor',
                'nazwisko' => '2',
                'data_ur' => '1809-09-04',
            ],
            [
                'id' => 3,
                'imie' => 'Autor',
                'nazwisko' => '3',
                'data_ur' => '1798-12-24',
            ],
            [
                'id' => 4,
                'imie' => 'Autor',
                'nazwisko' => '4',
                'data_ur' => '1798-12-24',
            ],
            [
                'id' => 5,
                'imie' => 'Autor',
                'nazwisko' => '5',
                'data_ur' => '1798-12-24',
            ],
        ];
        Autor::insert($autors);
    }
}
