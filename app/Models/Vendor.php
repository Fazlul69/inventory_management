<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    
    protected $fillable = ['id','name'];

    public function purchasecall()
    {
        return $this->hasMany(Purchase::class);
    }
}
