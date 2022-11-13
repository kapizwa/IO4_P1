<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zamowienia extends Model
{
    use HasFactory;
    protected $table = 'zamowienie';
    protected $fillable = [
        'id', 'data','adres_wysylki',
    ];

    protected $casts =
    [
        'data' => 'date',
        'adres_wysylki' => 'string',
    ];
}