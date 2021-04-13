<?php

namespace App\Http\Controllers\Supplier;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Exports\TransactionsExport;
use App\Imports\TransactionsImport;
use App\Models\Control;
use App\Models\Import;
use Maatwebsite\Excel\Facades\Excel;
use App\Model\Months;
use App\Models\Month;

class ImportController extends Controller
{
    public function index()
    {
        $amount = Control::count();
        $records = Control::all()->last();
        $imports = Import::with('month')->orderBy('description_final', 'DESC')->take(5)->get();

        return view('supplier.import', compact('amount', 'records', 'imports'));
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
    public function importExcel(Request $request)
    {
        Excel::import(new TransactionsImport, $request->import_file);

        \Session::put('success', 'Your file is imported successfully in database.');

        return back();
    }
}
