<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/auth/login', [AuthController::class, 'login'])->name('auth.login');
    Route::post('/auth/register', [UserController::class, 'register'])->name('register');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard.dashboard');
    })->name('dashboard');
    Route::get('/dashboard/profile', function () {
        return view('dashboard.profile');
    })->name('dashboard.profile');
    Route::get('/dashboard/pengajuan', [DataController::class, 'show'])->name('submission');
    Route::get('/dashboard/pengajuan', [DataController::class, 'approver'])->name('submission.approver');
    Route::post('/auth/logout', [AuthController::class, 'logout'])->name('auth.logout');

    // submission
    Route::get('/dashboard/pengajuan/create', [DataController::class, 'create'])->name('pengajuan.create');
    Route::post('/submission/create', [DataController::class, 'store'])->name('submission.create');
    Route::delete('/submission/delete/{id}', [DataController::class, 'destroy'])->name('submission.delete');
    Route::get('/dashboard/pengajuan/edit/{id}', [DataController::class, 'edit'])->name('submission.edit');
    Route::put('/submission/update/{id}', [DataController::class, 'update'])->name('submission.update');

    // approver
    Route::post('/data/{id}/approve', [DataController::class, 'approve'])->name('data.approve');
    Route::post('/data/{id}/reject', [DataController::class, 'reject'])->name('data.reject');
});


