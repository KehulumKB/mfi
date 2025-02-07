<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MicrofinanceController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/add-mfi-admin', [AdminController::class, 'addMfiAdmin'])->name('admin.add-mfi-admin');
    Route::get('/admin/mfi-admin-store', [AdminController::class, 'mfiAdminStore'])->name('admin.mfi-admin-store');


    Route::get('/admin/add-member', [AdminController::class, 'addMember'])->name('admin.add-member');
    Route::get('/admin/add-microfinance', [MicrofinanceController::class, 'addMicrofinance'])->name('admin.add-microfinance');
    Route::get('/admin/mfi-store', [MicrofinanceController::class, 'mfiStore'])->name('admin.mfi-store');
});



Route::middleware(['role:user'])->group(function () {
    Route::get('/user/dashboard', [UserController::class, 'index'])->name('user.dashboard');
});

