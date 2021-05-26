<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Import;
use Illuminate\Http\Request;

class IncrementalController extends Controller
{
    public function index()
    {
        $imports = Import::latest()
            ->take(3)
            ->get();

        return view('client.incremental', compact('imports'));
    }
}
