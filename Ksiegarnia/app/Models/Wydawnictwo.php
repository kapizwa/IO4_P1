<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wydawnictwo extends Model
{
    use HasFactory;
    protected $table = 'wydawnictwo';
    protected $fillable = [
        'id', 'nazwa',
    ];

    protected $casts =
    [
        'nazwa' => 'string',
    ];
}
