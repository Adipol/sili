<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\PdfController;

Route::get('/', HomeController::class)->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/livewire-charts', function () {
    return view('home');
});

Route::get('/download-pdf', [PdfController::class, 'downloadPDF'])->name('download-pdf');
