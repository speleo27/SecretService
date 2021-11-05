<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MissionInfo extends Model
{
    use HasFactory;
    public function agents(){
        return $this->belongsToMany(Agent::class, "agents");
    }
    public function targets(){
        return $this->belongsToMany(Agent::class, "targets");
    }
    public function contacts(){
        return $this->belongsToMany(Agent::class, "contacts");
    }

}
