<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Control;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;

class PdfController extends Controller
{
    public function downloadPDF($id)
    {
        $pep = Control::where('id_register', $id)->first();
        $date = Carbon::now();

        $pdf = PDF::loadView('client.pdf', compact('pep', 'date'));

        return $pdf->stream('AMLC_Pep.pdf');
    }

    public function getAllpep($id)
    {
        $pep = Control::where('id_register', $id)->first();
        $date = Carbon::now();

        return view('client.pdf', compact('pep', 'date'));
    }
}
