<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Import extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $dates = [
        'description_beginning',
        'description_final'
    ];
}
