<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'id';

    protected $fillable = [
        'product_name',
        // 'key_specifications',
        // 'benefits',
        // 'use_cases',
        'details',
        'image',
    ];
}
