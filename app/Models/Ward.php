<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ward extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function lga(){
        return $this->belongsTo(LGA::class);
    }

    public function citizens(){
        return $this->hasMany(Citizen::class);
    }

}
