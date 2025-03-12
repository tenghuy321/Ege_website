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

    protected static function boot(){
        parent::boot();

        static::creating(function($license){
            $license->order = License::max('order') + 1;
        });
    }
}
