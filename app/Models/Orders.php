<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    protected $fillable = [
        'estado',
        'cliente',
        'celular',
        'fecha_entrega',
        'vendedor',
        'macho',
        'potentisimo',
        'spray',
        'xoxo',
        'lovin',
        'anillos',
        'pulseras',
        'macho50',
        'broja',
        'bazul',
        'bnegra',
        'quitavicio',
        'litoku',
        'hepadol',
        'xoxoretardante',
        'comprobante',
        'carrera',
        'total',
        'stock',
        'novedades',
    ];
}
