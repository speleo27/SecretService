<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public $timestamps=false;
    use HasFactory;
    public function nationality(){
        return $this->belongsTo(Nationality::class);
    }
}
