<?php

namespace App\Http\Controllers\Supplier;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Exports\TransactionsExport;
use App\Imports\TransactionsImport;
use Maatwebsite\Excel\Facades\Excel;

class ImportController extends Controller
{
    public function index()
    {
        return view('supplier.import');
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
