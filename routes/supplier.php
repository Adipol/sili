<?php

use App\Http\Controllers\Supplier\ImportController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Supplier\ConsultController;


Route::get('import', [ImportController::class, 'index'])->name('import.index');

Route::post('importExcel', [ImportController::class, 'importExcel'])->name('importExcel');

Route::get('consults', [ConsultController::class, 'index'])->name('consults.index');
