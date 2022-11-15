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
                'ilosc_stron' => 300,
                'ilosc_sztuk' => 200,
                'wydawnictwo' => 'GREG',
                'autor' => 'Adam Mickiewicz',
            ],
            [
                'id' => 2,
                'tytul' => 'Ferdydurke',
                'cena' => '30',
                'ilosc_stron' => 250,
                'ilosc_sztuk' => 50,
                'wydawnictwo' => 'OPERON',
                'autor' => 'Witold Gombrowicz',
            ],
            [
                'id' => 3,
                'tytul' => 'Książka 3',
                'cena' => '80',
                'ilosc_stron' => 890,
                'ilosc_sztuk' => 15,
                'wydawnictwo' => 'GREG',
                'autor' => 'Juliusz Słowacki',
            ],
        ];
        Book::insert($book);
    }
}
