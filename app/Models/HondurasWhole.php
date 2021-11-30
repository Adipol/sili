<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HondurasWhole extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    protected $dates = [
        'date'
    ];
}
