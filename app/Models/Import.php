<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Import extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    /** @return HasMany  */
    public function months()
    {
        return $this->hasMany('App\Models\Month');
    }
}
