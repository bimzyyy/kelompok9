<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OsisRegistrationController;

Route::get('/', function () {
    return view('welcome');
});
Route::middleware(['auth'])->group(function () {
    Route::get('/osis', [OsisRegistrationController::class, 'index'])->name('osis.index');
    Route::get('/osis/daftar', [OsisRegistrationController::class, 'create'])->name('osis.create');
    Route::post('/osis/daftar', [OsisRegistrationController::class, 'store'])->name('osis.store');
});