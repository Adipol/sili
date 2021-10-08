<?php

namespace App\Http\Controllers;

use App\Models\Detail;
use Illuminate\Http\Request;

class AllController extends Controller
{
    public function index()
    {
        $details = Detail::all();

        return view('supplier.import_all', compact('details'));
    }
}
