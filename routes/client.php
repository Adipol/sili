<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\AllController;
use App\Http\Controllers\Client\CompleteController;
use App\Http\Controllers\Client\AllHondurasController;
use App\Http\Controllers\Client\IncrementalController;
use App\Http\Controllers\Client\CompleteHondurasController;
use App\Http\Controllers\Client\IncrementalHondurasController;


Route::get('client', [IncrementalController::class, 'index'])->name('client.index');

Route::get('incremental', [IncrementalController::class, 'index'])->name('incremental.index');

Route::get('complete', [CompleteController::class, 'index'])->name('complete.index');

Route::get('all/{id}', [AllController::class, 'show'])->name('all.show');


//Honduras
Route::get('incremental-honduras', [IncrementalHondurasController::class, 'index'])->name('incremental.honduras.index');

Route::get('complete-honduras', [CompleteHondurasController::class, 'index'])->name('complete.honduras.index');;

Route::get('all-honduras/{id}', [AllHondurasController::class, 'show'])->name('all.honduras.show');
