<?php

namespace App\Http\Controllers\Client;

use App\Exports\TransactionsExport;
use App\Http\Controllers\Controller;
use App\Models\Import;
use Illuminate\Http\Request;

class IncrementalController extends Controller
{
    public function index()
    {
        // $imports = Import::latest()->take(20)->get();
        $imports = Import::all();

        return view('client.incremental', compact('imports'));
    }

    public function exportCsv($fecha)
    {
        return (new TransactionsExport)->forYear($fecha)->download('CSV_LISTA_INCREMENTAL' . '.csv');
    }

    public function exportXlsx($fecha)
    {
        return (new TransactionsExport)->forYear($fecha)->download('XLSX_LISTA_INCREMENTAL' . '.xlsx');
    }
}
