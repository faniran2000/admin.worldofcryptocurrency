<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function account() {
        return $this->belongsTo(Account::class);
    }
    public function category() {
        return $this->belongsTo(Category::class);
    }
    public function subcategory() {
        return $this->belongsTo(Subcategory::class);
    }
    public function order_product() {
        return $this->hasMany(OrderProduct::class);
    }
    public function favorite() {
        return $this->hasMany(Favorite::class);
    }
}
