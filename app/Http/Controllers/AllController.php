<?php

namespace App\Http\Controllers;

use App\Models\Detail;
use Illuminate\Http\Request;

class AllController extends Controller
{
    public function index()
    {
        return view('supplier.import_all');
    }
}
