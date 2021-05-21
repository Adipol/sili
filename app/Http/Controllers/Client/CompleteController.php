<?php

namespace App\Http\Controllers\Client;

use App\Exports\TransactionsExportAll;
use App\Http\Controllers\Controller;
use App\Models\Import;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CompleteController extends Controller
{
    public function index()
    {
        $control_one = DB::table('controls')->orderBy('report_date')->first();
        $control_two = DB::table('controls')->orderBy('report_date')->get();
        $control_three = $control_two->last();
        $controls = DB::table('controls')->count();

        return view('client.complete', compact('control_one', 'control_three', 'controls'));
    }

    public function exportCsv()
    {
        return (new TransactionsExportAll)->download('LISTA_COMPLETA' . '.csv');
    }
}
