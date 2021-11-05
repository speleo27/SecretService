<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Speciality extends Model
{
    public $timestamps=false;
    use HasFactory;
    public function agents(){
        return $this->belongsToMany(Agent::class,"agent_specialities");
    }
}
