<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function imports()
    {
        $this->hasMany(Import::class);
    }

    public function import_all()
    {
        $this->hasMany(Import::class);
    }
}
