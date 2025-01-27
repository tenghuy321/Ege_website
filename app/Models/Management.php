<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Management extends Model
{
    use HasFactory;
    protected $table = 'managements';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'description',
    ];
}
