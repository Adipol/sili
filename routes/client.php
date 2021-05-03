
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\IncrementalController;

Route::get('client', [IncrementalController::class, 'index'])->name('client.index');
