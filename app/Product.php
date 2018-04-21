<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $fillable = ['title', 'image_url', 'director', 'detail', 'open_date'];
    
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function review_avarage()
    {
        return $this->reviews()->avg('rate');
    }
}
