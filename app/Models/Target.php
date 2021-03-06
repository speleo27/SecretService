<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Target extends Model
{
    public $timestamps=false;
    use HasFactory;

    public function nationality(){
        return $this->belongsTo(Nationality::class);
    }
    public function missions(){
        return $this->belongsToMany(Missions::class,'missions_targets');
    }
}
