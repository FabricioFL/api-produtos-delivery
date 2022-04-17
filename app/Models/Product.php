<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'seller_name',
        'title',
        'category',
        'price',
        'quantity',
        'is_in_promotion'
    ];
}
