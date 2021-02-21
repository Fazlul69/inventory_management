<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $fillable = ['name', 'product_code','particular','category','quantity','product_price','vendor_id'];

    function vendor(){

        return $this->belongsTo(Vendor::class);

    }
}
