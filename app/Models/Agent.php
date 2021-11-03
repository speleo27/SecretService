<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory;
    public function nationality()
    {
        return $this->hasOne(Nationality::class);
    }
    public function specialities()
    {
        return $this->hasMany(AgentSpecialities::class);

    }
}
