<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'description', 'content', 'price', 'slug'];

    public function productsStore()
    {
        return $this->belongsTo(Store::class, 'store_id');
    }

    public function productsCategories()
    {
        return $this->belongsToMany(Category::class);
    }
}
