
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\CompleteController;
use App\Http\Controllers\Client\IncrementalController;


Route::get('incremental', [IncrementalController::class, 'index'])->name('incremental.index');

Route::get('complete', [CompleteController::class, 'index'])->name('complete.index');
