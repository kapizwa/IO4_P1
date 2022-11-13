<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class bookTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $book = [
            [
                'id' => 1,
                'tytul' => 'Pan Tadeusz',
                'cena' => '49',
                'ilosc_stron' => '300',
                'ilosc_sztuk' => '200',
                'wydawnictwo_id' => 1,
                'autor_id' => 1,
            ],
            [
                'id' => 2,
                'tytul' => 'Ferdydurke',
                'cena' => '30',
                'ilosc_stron' => '250',
                'ilosc_sztuk' => '50',
                'wydawnictwo_id' => 2,
                'autor_id' => 2,
            ],
            [
                'id' => 3,
                'tytul' => 'Książka 3',
                'cena' => '80',
                'ilosc_stron' => '890',
                'ilosc_sztuk' => '15',
                'wydawnictwo_id' => 3,
                'autor_id' => 3,
            ],
        ];
        Book::insert($book);
    }
}
