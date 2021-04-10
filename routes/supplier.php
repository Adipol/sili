<?php

use Illuminate\Support\Facades\Route;


Route::get('import-export', function () {
    return "Es donde estará las exportaciones";
})->name('import-export.index');
