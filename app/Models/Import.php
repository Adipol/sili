<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Import extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $dates = [
        'description_beginning',
        'description_final'
    ];

    /** @return HasMany  */
    public function month()
    {
        return $this->belongsTo(Month::class, 'id_month');
    }

    public function detail()
    {
        return $this->belongsTo(Detail::class, 'id_detail');
    }
}
