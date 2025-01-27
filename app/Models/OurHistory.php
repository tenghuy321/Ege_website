<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OurHistory extends Model
{
    use HasFactory;
    protected $table = 'ourhistories';
    protected $primaryKey = 'id';

    protected $fillable = [
        'description',
        'month',
        'year',
        'image',
    ];
}
