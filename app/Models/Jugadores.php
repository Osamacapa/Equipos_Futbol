<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jugadores extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'last_name',
        'age',
        'calification',
        'nacionality',
    ];
}
