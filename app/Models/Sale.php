<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;
    protected $fillable = ['date', 's_product_name', 's_product_code','s_product_particular','s_product_category','s_product_price','s_quantity','total','customer_info'];

    public function item()
    {
        return $this->hasMany(Item::class);
    }
}
