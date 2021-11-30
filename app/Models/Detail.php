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
        return $this->hasMany(Import::class);
    }

    public function wholes()
    {
        return $this->hasMany(Import::class);
    }

    public function expenses()
    {
        return $this->hasMany(Expense::class);
    }

    public function expenseshonduras()
    {
        return $this->hasMany(ExpenseHonduras::class);
    }
}
