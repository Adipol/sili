<?php

use App\Http\Controllers\Supplier\ImportController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Supplier\ConsultController;
use App\Http\Controllers\Supplier\IncremantalController;


Route::get('import', [ImportController::class, 'index'])->name('import.index');

Route::post('importExcel', [ImportController::class, 'importExcel'])->name('importExcel');

Route::get('consults', [ConsultController::class, 'index'])->name('consults.index');

Route::get('incremental', [IncremantalController::class, 'index'])->name('supplier.incremental.index');
