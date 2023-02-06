<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stocks extends Model
{
    use HasFactory;

    protected $fillable = [
        'stock1_name',
        'stock2_name',
        'stock3_name',
        'stock4_name',
        'stock5_name',
        'stock6_name',
    ];
}
