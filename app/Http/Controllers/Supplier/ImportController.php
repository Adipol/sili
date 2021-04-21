<?php

namespace App\Http\Controllers\Supplier;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Exports\TransactionsExport;
use App\Http\Requests\ImportStoreRequest;
use App\Imports\TransactionsImport;
use App\Models\Control;
use App\Models\Import;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Detail;
use App\Models\Month;

class ImportController extends Controller
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
        // return Excel::download(new TransactionsExport, 'transactions.' . 'csv')->forYear($fecha);
        return (new TransactionsExport)->forYear($fecha)->download('invoices.csv');
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
