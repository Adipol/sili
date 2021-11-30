<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\AllController;
use App\Http\Controllers\Client\CompleteController;
use App\Http\Controllers\Client\IncrementalController;
use App\Http\Controllers\Client\IncrementalHondurasController;


Route::get('client', [IncrementalController::class, 'index'])->name('client.index');

Route::get('incremental', [IncrementalController::class, 'index'])->name('incremental.index');

Route::get('complete', [CompleteController::class, 'index'])->name('complete.index');

Route::get('incremental/exportCsv/{fecha}', [IncrementalController::class, 'exportCsv'])->name('incremental.exportCsv');

Route::get('incremental/exportXlsx/{fecha}', [IncrementalController::class, 'exportXlsx'])->name('incremental.exportXlsx');

Route::get('all/{id}', [AllController::class, 'show'])->name('all.show');

Route::get('complete/exportCsv/{fecha}', [CompleteController::class, 'exportCsv'])->name('complete.exportCsv');

Route::get('complete/exportXlsx/{fecha}', [CompleteController::class, 'exportXlsx'])->name('complete.exportXlsx');

//Honduras
Route::get('incremental-honduras', [IncrementalHondurasController::class, 'index'])->name('incremental.honduras.index');
