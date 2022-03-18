<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LGA extends Model
{
    use HasFactory;
    public function state(){
        return $this->belongsTo(State::class);
    }

    public function wards(){
        return $this->hasMany(Ward::class);
    }

    public function citizens(){
        return $this->hasMany(Citizen::class, 'lga_id', 'id');
    }
}
