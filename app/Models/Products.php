<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'stock1',
        'stock2',
        'stock3',
        'stock4',
        'stock5',
        'stock6',
        'existencias',
        'lunes',
        'martes',
        'miercoles',
        'jueves',
        'viernes',
        'sabado',
        'domingo',
    ];
}
