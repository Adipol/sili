<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\CompleteController;
use App\Http\Controllers\Client\IncrementalController;


Route::get('client', [IncrementalController::class, 'index'])->name('client.index');

Route::get('incremental', [IncrementalController::class, 'index'])->name('incremental.index');

Route::get('complete', [CompleteController::class, 'index'])->name('complete.index');

Route::get('incremental/exportCsv/{fecha}', [IncrementalController::class, 'exportCsv'])->name('incremental.exportCsv');

Route::get('incremental/exportXlsx/{fecha}', [IncrementalController::class, 'exportXlsx'])->name('incremental.exportXlsx');
