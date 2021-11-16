<?php

namespace App\Http\Controllers\Client;

use App\Exports\TransactionsExportAll;
use App\Http\Controllers\Controller;
use App\Models\Control;
use App\Models\whole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompleteController extends Controller
{
    public function index()
    {
        $complete = whole::all();
        $lists = Control::all();

        return view('client.complete', compact('complete', 'lists'));
    }

    public function exportCsv($fecha)
    {
        $trans = strtotime($fecha);
        $trans1 = date('d-m-Y', $trans);

        return (new TransactionsExportAll)->download('CSV_LISTA_COMPLETA_AMLC_AL_' . $trans1 .  '.csv');
    }

    public function exportXlsx($fecha)
    {
        $trans = strtotime($fecha);
        $trans1 = date('d-m-Y', $trans);

        return (new TransactionsExportAll)->download('XLSX_LISTA_COMPLETA_AMLC_AL_' . $trans1 .  '.xlsx');
    }
}
