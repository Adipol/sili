<?php

use App\Http\Controllers\Supplier\ImportController;
use Illuminate\Support\Facades\Route;


Route::get('import', [ImportController::class, 'index'])->name('import.index');
