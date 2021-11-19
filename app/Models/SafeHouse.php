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
    public function houseType(){
        return $this->hasOne(SafeHouseType::class,"safe_houses_id","safe_houses_type_id");
    }
}
