<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citizen extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function state(){
        return $this->belongsTo(State::class);
    }

    public function lga(){
        return $this->belongsTo(LGA::class, 'id', 'lga_id');
    }

    public function ward(){
        return $this->belongsTo(Ward::class);
    }
}
