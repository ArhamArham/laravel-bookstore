<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
     protected $fillable = [
        'name', 'thumbnail', 'price','discount',
    ];
    
    public function categories()
    {
        return $this->belongsToMany('App\Category','category_book');
    }
}
