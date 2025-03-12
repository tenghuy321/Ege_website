<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Award extends Model
{
    protected $table = 'awards';
    protected $primaryKey = 'id';

    protected $fillable = [
        'title',
        'image',
    ];

    protected static function boot(){
        parent::boot();

        static::creating(function($award){
            $award->order = Award::max('order') + 1;
        });
    }
}
