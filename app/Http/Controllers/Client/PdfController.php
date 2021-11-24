<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;


class PdfController extends Controller
{
    public function downloadPDF()
    {
        $pdf = PDF::loadView('client.pdf');
        return $pdf->stream('AMLC_Pep.pdf');
    }
}
