<?php

use App\Http\Controllers\CalendarController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\TermsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('events', EventsController::class);
});
Route::get('/hist', [HistoryController::class, 'index'])->name('hist.index');
Route::get('/config', [SettingsController::class, 'index'])->name('config.index');

Route::get('/termos', [TermsController::class, 'index'])->name('termos.index');
Route::resource('calendar', CalendarController::class);
require __DIR__.'/auth.php';
