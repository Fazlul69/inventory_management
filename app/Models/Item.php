<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['name', 'product_code','category','product_price','vendors'];


    public function setVendorAttribute($value)

    {

        $this->attributes['vendors'] = json_encode($value);

    }


    public function getVendorAttribute($value)

    {

        return $this->attributes['vendors'] = json_decode($value);

    }

    function purchase(){

        return $this->belongsTo(Purchase::class);

    }
    function sale(){

        return $this->belongsTo(Sale::class);

    }
    function damage(){

        return $this->belongsTo(Damage::class);

    }
}

