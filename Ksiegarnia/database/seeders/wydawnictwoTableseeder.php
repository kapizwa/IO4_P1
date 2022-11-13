<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Wydawnictwo;

class wydawnictwoTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $wydawnictwo =[
            [
                'id' => '1',
                'nazwa' => 'GREG',
            ],

            [
                'id' => '2',
                'nazwa' => 'ABE',
            ],

            [
                'id' => '3',
                'nazwa' => 'Anagram',
            ],
        ];
        Wydawnictwo::insert($wydawnictwo);
    }
}
