<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataUcapanController;
use App\Http\Controllers\DataUndanganController;
use App\Http\Controllers\LandingpageController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login/store', [AuthController::class, 'loginStore'])->name('login.store');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::prefix('data-undangan')->group(function () {
        Route::get('/', [DataUndanganController::class, 'index'])->name('data-undangan');
        Route::post('/store', [DataUndanganController::class, 'store'])->name('data-undangan.store');
        Route::any('/remove', [DataUndanganController::class, 'remove'])->name('data-undangan.remove');
    });

    Route::prefix('data-ucapan')->group(function () {
        Route::get('/', [DataUcapanController::class, 'index'])->name('data-ucapan');
    });

    Route::prefix('list-user')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('list-user');
    });

    Route::prefix('template-message')->group(function () {
        Route::get('/', [TemplateController::class, 'index'])->name('template-message');
        Route::post('/store', [TemplateController::class, 'index'])->name('template-message.store');
        Route::any('/remove', [TemplateController::class, 'remove'])->name('template-message.remove');
    });

    Route::any('logout', [AuthController::class, 'logout'])->name('logout');
});

Route::get('/', [LandingpageController::class, 'index'])->name('home');
Route::get('/temp/{slug}', [LandingpageController::class, 'showTemplate'])->name('template');
Route::post('/konfirmasi', [LandingpageController::class, 'kirimKonfirmasi'])->name('konfirmasi');
Route::get('/{slug}', [LandingpageController::class, 'detailTemplate'])->name('template.detail');
Route::post('/{slug}/store-ucapan', [LandingpageController::class, 'storeUcapan'])->name('template.store-ucapan');
