<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
Route::get('profile', [ProfileController::class, 'index'])->name('profile');
Route::get('profile-setting', [ProfileController::class, 'profileSetting'])->name('profile-setting');
Route::get('profile-edit', [ProfileController::class, 'profileEdit'])->name('profile-edit');

Route::post('profile-update', [ProfileController::class, 'profileUpdate'])->name('profile-update');
Route::post('password-update', [ProfileController::class, 'passwordUpdate'])->name('password-update');

Route::get('text', [ProfileController::class, 'text'])->name('text');



