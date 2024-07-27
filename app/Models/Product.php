<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'images',
        'price',
        'category',
        'stock_quantity',
        'sku',
        'weight',
        'dimensions',
        'reviews',
        'manufacturer',
        'expiry_date',
        'tags',
    ];

    protected $casts = [
        'images' => 'array',
        'dimensions' => 'array',
        'reviews' => 'array',
        'tags' => 'array',
    ];
}
