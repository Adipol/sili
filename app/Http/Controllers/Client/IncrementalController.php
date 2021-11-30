<?php

namespace App\Http\Controllers\Client;

use App\Exports\TransactionsExport;
use App\Http\Controllers\Controller;
use App\Models\Import;
use Illuminate\Http\Request;
use Carbon\Carbon;

class IncrementalController extends Controller
{
    public function index()
    {
        return view('client.incremental');
    }
}
