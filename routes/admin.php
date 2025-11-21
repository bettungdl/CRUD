<?php

use App\Http\Controllers\Admin\Users\UsersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;

Route::middleware(['role:admin'])->group(function () {
    //dashboard
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

    //usuarios
    Route::get('/users', [UsersController::class, 'index'])->name('users');
    Route::get('/users/show/{id}', [UsersController::class, 'show'])->name('users.show');
    Route::get('/users/edit/{id}', [UsersController::class, 'edit'])->name('users.edit');
    Route::get('/users/create', [UsersController::class, 'create'])->name('users.create');
    Route::post('/users/delete/{id}', [UsersController::class, 'delete'])
        ->name('users.delete');
});