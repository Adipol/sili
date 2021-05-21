
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\AllController;
use App\Http\Controllers\Client\ConsultController;
use App\Http\Controllers\Client\CompleteController;
use App\Http\Controllers\Client\IncrementalController;


Route::get('incremental', [IncrementalController::class, 'index'])->name('incremental.index');

Route::get('complete', [CompleteController::class, 'index'])->name('complete.index');

Route::get('exportExcel/{fecha}', [IncrementalController::class, 'exportExcel'])->name('incremental.exportExcel');

Route::get('consults', [ConsultController::class, 'index'])->name('consults.index');

Route::get('all/{id}', [AllController::class, 'show'])->name('all.show');


Route::get('exportCsv', [CompleteController::class, 'exportCsv'])->name('complete.exportCsv');
