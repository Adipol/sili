<?php

namespace App\Http\Controllers\Supplier;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConsultHondurasController extends Controller
{
    public function index()
    {
        return view('supplier.consults.index-honduras');
    }
}
