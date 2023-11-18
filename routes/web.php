<?php

use App\Http\Controllers\CalendarController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\FeelingController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\TermsController;
use App\Http\Controllers\SupportController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('eventos.index');
});
//Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home.index');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

Route::resource('events', EventsController::class);
Route::get('/hist', [HistoryController::class, 'index'])->name('hist.index');
Route::get('/config', [SettingsController::class, 'index'])->name('config.index');
Route::get('/apoie', [SupportController::class, 'index'])->name('apoie.index');
Route::get('/termos', [TermsController::class, 'index'])->name('termos.index');
Route::resource('calendar', CalendarController::class);
Route::resource('feeling', FeelingController::class);

require __DIR__.'/auth.php';
