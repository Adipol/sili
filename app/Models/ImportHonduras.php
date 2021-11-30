<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImportHonduras extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'import_honduras';

    protected $dates = [
        'description_beginning',
        'description_final'
    ];
}
