<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable = [
        
        'title',
        'description',
        'price',
        'image',
        'series',
        'sale_date',
        'type'

    ];
}
