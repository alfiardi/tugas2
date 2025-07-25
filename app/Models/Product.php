<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'price', 'category_id'];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function products() {
        return $this->belongsTo(Category::class);
    }
}
