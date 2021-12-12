<?php

namespace App\Http\Controllers\Supplier;

use App\Http\Controllers\Controller;
use App\Http\Requests\ImportStoreRequest;
use App\Imports\TransactionsHondurasImport;
use App\Models\ControlHonduras;
use App\Models\Detail;
use App\Models\ExpenseHonduras;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Maatwebsite\Excel\Facades\Excel;

class ImportHondurasController extends Controller
{
    public function index()
    {
        $amount = ControlHonduras::count();
        $details = Detail::select('id', 'name')->orderBy('name', 'asc')->get();
        $expenses = ExpenseHonduras::orderBy('id', 'desc')->get();

        return view('supplier.import_honduras', compact('amount', 'details', 'expenses'));
    }

    public function importExcel(ImportStoreRequest $request)
    {
        $import = new ExpenseHonduras();
        $import->date = $request->get('date');
        $import->detail_id = $request->get('detail');
        $import->save();

        Excel::import(new TransactionsHondurasImport, $request->import_file);

        return Redirect::route('import.honduras.index')->withSuccess('El archivo se cargo satisfactoriamente!');
    }
}
