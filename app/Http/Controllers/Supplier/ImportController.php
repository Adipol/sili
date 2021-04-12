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

class ImportController extends Controller
{
    public function index()
    {
        $amount = Control::count();
        $records = Control::all()->last();
        $imports = Import::all()->take(3);


        return view('supplier.import', compact('amount', 'records', 'imports'));
    }

    public function exportExcel($type)
    {
        return Excel::download(new TransactionsExport, 'transactions.' . $type);
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
