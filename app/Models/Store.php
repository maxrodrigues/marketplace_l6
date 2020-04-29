<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Store extends Model
{
    protected $fillable = ['name', 'description', 'phone', 'mobile_phone', 'slug'];

    public function storeUser()
    {
        return $this->belongsTo(User::class);
    }

    public function storeProducts()
    {
        return $this->hasMany(Product::class);
    }
}
