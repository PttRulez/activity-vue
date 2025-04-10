<?php

use App\Http\Controllers\ActivitiesController;
use App\Http\Controllers\CyclingTracksController;
use App\Http\Controllers\DiariesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MealsController;
use App\Http\Controllers\SettingsController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::resource('/activities', ActivitiesController::class)->only(['index', 'store']);
    Route::get('/diaries', [DiariesController::class, 'index'])->name('diaries');
    Route::resource('/meals', MealsController::class)->only(['index', 'store']);
    Route::get('/settings', [SettingsController::class, 'index'])->name('settings');
});

Route::get('/', HomeController::class)->name('home');
Route::get('/tracks/cycling', [CyclingTracksController::class, 'index'])->name('tracks.cycling');


require __DIR__ . '/auth.php';
