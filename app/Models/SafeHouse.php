<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SafeHouse extends Model
{
    public $timestamps=false;
    use HasFactory;

    public function country(){
        return $this->hasOne(Country::class);

    }
    public function type(){
        return $this->belongsTo(SafeHouseType::class);
    }
    public function missions(){
        return $this->belongsToMany(Mission::class);
    }
}
