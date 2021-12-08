<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Client\PdfController;
use App\Http\Controllers\Client\PdfHondurasController;

Route::get('/', HomeController::class)->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/livewire-charts', function () {
    return view('home');
});

Route::get('/download-pdf/{id}', [PdfController::class, 'downloadPDF'])->name('download-pdf');

Route::get('/download-honduras-pdf/{id}', [PdfHondurasController::class, 'downloadPDF'])->name('download-honduras-pdf');

Route::get('/get-all-pep/{id}', [PdfController::class, 'getAllpep'])->name('get-all-pep');
