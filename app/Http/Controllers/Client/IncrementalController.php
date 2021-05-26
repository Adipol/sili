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

        //$imports = Import::all();

        return view('client.incremental', compact('imports'));
    }

    public function exportCsv($fecha)
    {
        $trans = strtotime($fecha);
        $trans1 = date('d-m-Y', $trans);

        return (new TransactionsExport)->forYear($fecha)->download('CSV_LISTA_INCREMENTAL_AL_' . $trans1 .  '.csv');
    }

    public function exportXlsx($fecha)
    {
        $trans = strtotime($fecha);
        $trans1 = date('d-m-Y', $trans);

        return (new TransactionsExport)->forYear($fecha)->download('XLSX_LISTA_INCREMENTAL_AL_' . $trans1 .  '.xlsx');
    }
}
