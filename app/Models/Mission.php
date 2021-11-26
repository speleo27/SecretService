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
    public function type(){
        return $this->belongsTo(MissionTypes::class);
    }
    public function status(){
        return $this->belongsTo(Status::class);
    }

    public function safehouses(){
        return $this->belongsToMany(SafeHouse::class,"missions_safe_houses","mission_id","safe_house_id");

    }
    public function contacts(){
        return $this->belongsToMany(Contact::class,"contacts_missions","mission_id", "contact_id");
    }
    public function agents(){
        return $this->belongsToMany(Agent::class,"agents_missions","mission_id","agent_id");
    }
    public function targets(){
        return $this->belongsToMany(Target::class,"missions_targets","mission_id", "target_id");
    }
    public function speciality(){
        return $this->belongsTo(Speciality::class);
    }

}
