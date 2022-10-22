<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $table = 'users';

    public function order() {
        return $this->hasMany(Order::class);
    }
    public function withdrawal() {
        return $this->hasMany(Withdrawal::class);
    }
    public function product() {
        return $this->hasMany(Product::class);
    }
    public function order_product() {
        return $this->hasMany(OrderProduct::class);
    }
    public function favorite() {
        return $this->hasMany(Favorite::class);
    }
    public function vendor() {
        return $this->hasOne(Vendor::class);
    }
}
