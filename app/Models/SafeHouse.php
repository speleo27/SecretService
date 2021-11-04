<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SafeHouse extends Model
{
    use HasFactory;

    public function country(){
        return $this->hasOne(Country::class);
    }
}