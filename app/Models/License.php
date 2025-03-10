<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class License extends Model
{
    protected $table = 'licenses';
    protected $primaryKey = 'id';

    protected $fillable = [
        'image',
    ];
}
