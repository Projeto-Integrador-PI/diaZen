<?php

use App\Http\Controllers\CalendarController;
use App\Http\Controllers\DailyController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\TermsController;
use App\Http\Controllers\SupportController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::middleware('auth')->group(function () {
    Route::get('/home', [HomeController::class, 'dashboard'])->name('home.dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('events', EventsController::class);
    Route::get('/events/{event}', [EventsController::class, 'feeling'])->name('events.feeling');
    Route::post('/events/{event}', [EventsController::class, 'setFeeling'])->name('events.setFeeling');
    Route::get('/hist', [HistoryController::class, 'index'])->name('hist.index');
    Route::get('/config', [SettingsController::class, 'index'])->name('config.index');
    Route::get('/help', [SettingsController::class, 'help'])->name('help.index');
    Route::get('/apoie', [SupportController::class, 'index'])->name('apoie.index');
    Route::get('/termos', [TermsController::class, 'index'])->name('termos.index');
    Route::resource('calendar', CalendarController::class);
    Route::resource('daily', DailyController::class);
});


require __DIR__.'/auth.php';
