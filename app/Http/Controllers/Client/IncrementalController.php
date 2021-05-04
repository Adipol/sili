<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Import;
use Illuminate\Http\Request;
use Carbon\Carbon;

class IncrementalController extends Controller
{
    public function index()
    {
        $imports = Import::oldest()
            ->take(3)
            ->get();

        return view('client.incremental', compact('imports'));
    }
}
