<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllHondurasController extends Controller
{
    public function index()
    {
        return view('supplier.honduras_import_all');
    }
}
