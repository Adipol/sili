<?php

namespace App\Http\Controllers\Supplier;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ImportStoreRequest;
use App\Imports\TransactionsImport;
use App\Models\Control;
use App\Exports\TransactionsExport;
use App\Models\Detail;
use App\Models\Expense;
use Maatwebsite\Excel\Facades\Excel;

class ImportController extends Controller
{
    public function index()
    {
        $amount = Control::count();
        $details = Detail::select('id', 'name')->orderBy('name', 'asc')->get();
        $expenses = Expense::orderBy('id', 'desc')->get();

        return view('supplier.import', compact('amount', 'details', 'expenses'));
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function importExcel(ImportStoreRequest $request)
    {
        $import = new Expense();
        $import->date = $request->get('date');
        $import->detail_id = $request->get('detail');
        $import->save();

        Excel::import(new TransactionsImport, $request->import_file);

        \Session::put('success', 'Your file is imported successfully in database.');

        return back();
    }
}
