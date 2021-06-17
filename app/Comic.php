<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable = [
        'name',
        'edition',
        'pubblished',
        'author',
        'thumb'
    ];
}
