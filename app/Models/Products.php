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
        'stock_alejo',
        'stock_andy',
        'stock_rodolfo',
        'stock_kevin',
        'stock_hector',
        'stock_jenny',
    ];
}
