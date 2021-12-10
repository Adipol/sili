<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\ControlHonduras;
use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PdfHondurasController extends Controller
{
    public function downloadPDF($id)
    {
        $pep = ControlHonduras::where('id_register', $id)->first();
        $date = Carbon::now();

        $pdf = PDF::loadView('client.honduras-pdf', compact('pep', 'date'));

        return $pdf->stream('AMLC_Pep_h.pdf');
    }

    public function getAllpep($id)
    {
        $pep = ControlHonduras::where('id_register', $id)->first();
        $date = Carbon::now();

        return view('client.pdf', compact('pep', 'date'));
    }
}
