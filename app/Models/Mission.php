<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mission extends Model
{
    use HasFactory;

    public function country(){
        return $this->hasOne(Country::class);
    }
    public function missionType(){
        return $this->hasMany(MissionType::class);
    }
    public function status(){
        return $this->hasOne(Statuses::class);
    }

    public function safeHouse(){
        return $this->hasMany(SafeHouse::class);

    }

    public function target(){
        return $this->hasMany(Target::class);
    }

    public function contacts(){
        return $this->hasMany(Contact::class);
    }

    public function agent(){

        return $this->hasMany(Agent::class);
    }
}
