<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $table = 'book';
    public $timestamps = false;
    protected $fillable = [
        'id', 
        'tytul',
        'cena',
        'ilosc_stron',
        'ilosc_sztuk',
        'wydawnictwo',
        'autor',
    ];

    protected $casts =
    [
        'tytul' => 'string',
        'cena' => 'string',
        'ilosc_stron' => 'int',
        'ilosc_sztuk' => 'int',
        'wydawnictwo' => 'string',
        'autor' => 'string',
        

    ];

    
}
