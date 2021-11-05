<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mission extends Model
{
    public $timestamps=false;
    use HasFactory;

    public function country(){
        return $this->belongsTo(Country::class);
    }
    public function missionType(){
        return $this->belongsToMany(MissionType::class, "mission_types");
    }
    public function status(){
        return $this->hasOne(Statuses::class);
    }

    public function safeHouse(){
        return $this->belongsToMany(SafeHouse::class,"safe_houses");

    }


}
