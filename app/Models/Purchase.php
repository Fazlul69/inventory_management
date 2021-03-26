<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $fillable = ['date','name', 'product_code','particular','category','quantity','product_price', 'total','vendor_id'];

    function vendor(){

        return $this->belongsTo(Vendor::class);
    }

    public function itemCall()
    {
        return $this->hasMany(Item::class);
    }
}
