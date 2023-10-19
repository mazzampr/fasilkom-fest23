<?php

use App\Http\Controllers\Admin\dashboardController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', function () {
    return view('layouts.master');
});

Route::prefix('admin')
    // ->middleware('auth', 'admin')
    ->group(function () {
        Route::get('/', [dashboardController::class, 'index'])->name('admin.index');
    });
