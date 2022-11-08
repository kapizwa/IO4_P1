<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $table = 'book';
    protected $fillable = [
        'id', 'tytul','cena','ilosc_stron','ilosc_sztuk','wydawnictwo_id','autor_id',
    ];

    protected $casts =
    [
        'tytul' => 'string',
        'cena' => 'string',
        'ilosc_stron' => 'string',
        'ilosc_sztuk' => 'string',

    ];
}
