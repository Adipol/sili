<?php

namespace App\Http\Controllers\Supplier;

use App\Http\Controllers\Controller;
use App\Http\Requests\ImportStoreRequest;
use App\Imports\TransactionsHondurasImport;
use App\Models\ControlHonduras;
use App\Models\Detail;
use App\Models\ExpenseHonduras;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ImportHondurasController extends Controller
{
    public function index()
    {
        $amount = ControlHonduras::count();
        $details = Detail::select('id', 'name')->get();
        $expenses = ExpenseHonduras::all();

        return view('supplier.import_honduras', compact('amount', 'details', 'expenses'));
    }

    public function importExcel(ImportStoreRequest $request)
    {
        $import = new ExpenseHonduras();
        $import->date = $request->get('date');
        $import->detail_id = $request->get('detail');
        $import->save();

        Excel::import(new TransactionsHondurasImport, $request->import_file);

        \Session::put('success', 'Your file is imported successfully in database.');

        return back();
    }
}
