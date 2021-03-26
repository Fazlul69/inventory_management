<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    
    protected $fillable = ['name','email','mobile','unpaid'];

    public function purchasecall()
    {
        return $this->hasMany(Purchase::class);
    }
    public function damage()
    {
        return $this->hasMany(Damage::class);
    }
}
