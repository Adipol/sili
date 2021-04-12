<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    public function country()
    {
        return $this->belongsTo('App\Models\Country');
    }
    //* Relación uno a muchos
    public function entities()
    {
        return $this->hasMany('App\Models\Entity');
    }
}
