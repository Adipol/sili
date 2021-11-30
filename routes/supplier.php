<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AllController;
use App\Http\Controllers\Supplier\ImportController;
use App\Http\Controllers\Supplier\ConsultController;
use App\Http\Controllers\Supplier\IncrementalController;
use App\Http\Controllers\Supplier\ImportHondurasController;
use App\Http\Controllers\Supplier\IncrementalHondurasController;



Route::get('import', [ImportController::class, 'index'])->name('import.index');

Route::post('importExcel', [ImportController::class, 'importExcel'])->name('importExcel');

Route::get('consults', [ConsultController::class, 'index'])->name('consults.index');

Route::get('incremental', [IncrementalController::class, 'index'])->name('supplier.incremental.index');

Route::get('all', [AllController::class, 'index'])->name('supplier.all.index');

//Para Honduras

Route::get('import-honduras', [ImportHondurasController::class, 'index'])->name('import.honduras.index');

Route::post('importHondurasExcel', [ImportHondurasController::class, 'importExcel'])->name('importExcel.honduras');

Route::get('incremental-honduras', [IncrementalHondurasController::class, 'index'])->name('supplier.incremental.honduras.index');
