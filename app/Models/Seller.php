<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'identity_document',
        'seller_name',
        'is_open',
        'sales_amount',
        'is_active'
    ];
}
