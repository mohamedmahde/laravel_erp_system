<?php

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\LoginController;
use Illuminate\Support\Facades\Route;


Route::group(['namespace' => 'admin', 'prefix' => 'admin', 'middleware' => 'auth:admin'], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('logout', [LoginController::class, 'logout'])->name('admin.logout');
});


Route::group(['namespace' => 'admin', 'prefix' => 'admin', 'middleware' => 'guest:admin'], function () {
    Route::get('login', [LoginController::class, 'show_login_view'])->name('admin.showlogin');
    Route::post('login', [LoginController::class, 'login'])->name('admin.login');
});
