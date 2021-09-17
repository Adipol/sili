<?php

namespace App\Http\Controllers\Supplier;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ImportStoreRequest;
use App\Imports\TransactionsImport;
use App\Models\Control;
use App\Models\Import;
use App\Exports\TransactionsExport;
use Maatwebsite\Excel\Facades\Excel;

class ImportController extends Controller
{
    public function index()
    {
        $amount = Control::count();

        return view('supplier.import', compact('amount'));
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function importExcel(ImportStoreRequest $request)
    {
        Excel::import(new TransactionsImport, $request->import_file);

        \Session::put('success', 'Your file is imported successfully in database.');

        return back();
    }
}
