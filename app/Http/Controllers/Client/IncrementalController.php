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
        $imports = Import::latest()->take(5)->get();

        return view('client.incremental', compact('imports'));
    }

    public function exportExcel($fecha)
    {
        // return Excel::download(new TransactionsExport, 'transactions.' . 'csv')->forYear($fecha);
        return (new TransactionsExport)->forYear($fecha)->download('LISTA_INCREMENTAL_' . $fecha . 'csv');
    }

    public function exportXlsx($fecha)
    {
        // return Excel::download(new TransactionsExport, 'transactions.' . 'csv')->forYear($fecha);
        return (new TransactionsExport)->forYear($fecha)->download('invoices.xlsx');
    }
}
