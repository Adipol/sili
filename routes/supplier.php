<?php

use App\Http\Controllers\Supplier\ImportController;
use Illuminate\Support\Facades\Route;


Route::get('import', [ImportController::class, 'index'])->name('import.index');

Route::get('importExportView', [ImportController::class, 'importExportView'])->name('importExportView');
// Route for export/download tabledata to .csv, .xls or .xlsx
Route::get('exportExcel/{type}', [ImportController::class, 'exportExcel'])->name('exportExcel');
// Route for import excel data to database.
Route::post('importExcel', [ImportController::class, 'importExcel'])->name('importExcel');
