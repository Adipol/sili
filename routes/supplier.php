<?php

use App\Http\Controllers\Supplier\ImportController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Supplier\ConsultController;


Route::get('import', [ImportController::class, 'index'])->name('import.index');

Route::get('importExportView', [ImportController::class, 'importExportView'])->name('importExportView');

Route::get('exportCsv/{fecha}', [ImportController::class, 'exportCsv'])->name('exportCsv');

Route::get('exportXlsx/{fecha}', [ImportController::class, 'exportXlsx'])->name('exportXlsx');

Route::post('importExcel', [ImportController::class, 'importExcel'])->name('importExcel');

Route::delete('importDestroy/{id}', [ImportController::class, 'destroy'])->name('import.destroy');

Route::get('consults', [ConsultController::class, 'index'])->name('consults.index');
