<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AllegadoPdfController extends Controller
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
