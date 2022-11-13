<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    use HasFactory;
    protected $table = 'autor';
    protected $fillable = [
        'id', 'imie','nazwisko','data_ur',
    ];

    protected $casts =
    [
        'imie' => 'string',
        'nazwisko' => 'string',
        'data_ur' => 'date',

    ];
}
