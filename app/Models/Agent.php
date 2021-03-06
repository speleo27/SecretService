<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    public $timestamps=false;
    use HasFactory;


    public function nationality()
    {
        return $this->belongsTo(Nationality::class);
    }
    public function specialities()
    {
        return $this->belongsToMany(Speciality::class, 'agent_specialities');

    }
    public function missions(){
        return $this->belongsToMany(Missions::class,'agents_missions');
    }
}
