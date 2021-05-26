<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Import;
use Illuminate\Http\Request;

class IncrementalController extends Controller
{
    public function index()
    {
        $imports = Import::all();

        return view('client.incremental', compact('imports'));
    }
}
