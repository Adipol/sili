<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Control;
use Illuminate\Http\Request;

class ExportController extends Controller
{
    public function index()
    {
        $amount = Control::count();
        $records = Control::all()->last();
        $imports = Import::with('month')->orderBy('description_final', 'desc')->take(5)->get();
        $months = Month::all();
        $details = Detail::all();

        return view('supplier.import', compact('amount', 'records', 'imports', 'months', 'details'));
    }

    public function exportExcel($fecha)
    {
        $trans = strtotime($fecha);
        $trans1 = date('d-m-Y', $trans);

        // return Excel::download(new TransactionsExport, 'transactions.' . 'csv')->forYear($fecha);
        // return (new TransactionsExport)->forYear($fecha)->download('invoices.csv');
        //return (new TransactionsExport)->forYear($fecha)->download('AGREGADOS_HASTA_' . $trans) . '.csv';
        // return Excel::download(new TransactionsExport, 'transactions.' . 'csv')->forYear($fecha);
        // return (new TransactionsExport)->forYear($fecha)->download('invoices.csv');
        return (new TransactionsExport)->forYear($fecha)->download('AGREGADOS_HASTA_' . $trans1 . '.csv');
    }

    public function exportXlsx($fecha)
    {
        // return Excel::download(new TransactionsExport, 'transactions.' . 'csv')->forYear($fecha);
        return (new TransactionsExport)->forYear($fecha)->download('invoices.xlsx');
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function importExcel(ImportStoreRequest $request)
    {
        $import = new Import();
        $import->year = $request->get('year');
        $import->id_month = $request->get('id_month');
        $import->id_detail = $request->get('id_detail');
        $import->description_beginning = $request->get('description_beginning');
        $import->description_final = $request->get('description_final');
        if ($request->get('description_final') >= $request->get('description_beginning')) {
            $import->save();

            Excel::import(new TransactionsImport, $request->import_file);

            \Session::put('success', 'Your file is imported successfully in database.');

            return back();
        } else {
            return back()->with('danger', 'fecha incorrecta.');
        }
    }

    public function destroy($id)
    {
        Import::findOrFail($id)->delete();

        return back()->with('info', 'El registro se elimino con éxito');
    }
}
