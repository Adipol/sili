<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Import_all extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    public function detail()
    {
        return $this->belongsTo(Detail::class, 'id_detail');
    }
}
