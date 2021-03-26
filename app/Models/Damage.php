<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Damage extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'product_code','particular','category','quantity','product_price','vendor_id'];

    function vendor(){

        return $this->belongsTo(Vendor::class);
    }
    public function item()
    {
        return $this->hasMany(Item::class);
    }
}
