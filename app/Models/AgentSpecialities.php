<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgentSpecialities extends Model
{
    public $timestamps=false;
    use HasFactory;
    public function uuid(){
        return $this->hasOne(Agent::Class);
    }
    // TODO : find how work relationship with laravel
    public function specialities(){
        return $this->belongsToMany(Specialities::class);
    }
}
