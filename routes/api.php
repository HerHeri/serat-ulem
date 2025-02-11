<?php

use App\Http\Controllers\DataUcapanController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/ping', [App\Http\Controllers\LandingpageController::class, 'testLp'])->name('test-lp');

Route::get('/daftar-ucapan/{slug}', [DataUcapanController::class, 'getUcapan']);