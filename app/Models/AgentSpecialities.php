<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgentSpecialities extends Model
{
    use HasFactory;
    public function uuid(){
        return $this->hasOne(Agent::Class);
    }
    public function specialities(){
        return $this->hasMany(Specialities::class);
    }
}
