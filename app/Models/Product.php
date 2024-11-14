<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'category_id',
        'sku',
        'name',
        'price',
        'stock',
        'color',
        'image',
        'description'
    ];


    public function category() {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
