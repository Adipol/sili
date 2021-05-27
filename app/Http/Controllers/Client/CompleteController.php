<?php

namespace App\Http\Controllers\Client;

use App\Exports\TransactionsExportAll;
use App\Http\Controllers\Controller;
use App\Models\Control;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompleteController extends Controller
{
    public function index()
    {
        $control_one = Control::orderBy('report_date')->first();
        $control_two = Control::orderBy('report_date')->get();
        $control_three = $control_two->last();

        return view('client.complete', compact('control_one', 'control_two', 'control_three'));
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
