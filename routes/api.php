<?php

use App\Http\Controllers\Api\UserController;
use Illuminate\Support\Facades\Route;

Route::namespace('Api')->prefix('v1')->middleware('cors')->group(function () {
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
    Route::post('/users', [UserController::class, 'store'])->name('users.store');
    Route::post('/login', [UserController::class, 'login'])->name('users.login');
    Route::post('/users/infos', [UserController::class, 'infos'])->name('users.info');


    Route::middleware('api.refresh')->group(function () {
        //当前用户信息
        Route::post('/users/infos', [UserController::class, 'infos'])->name('users.info');
        //用户列表
        Route::get('/users', [UserController::class, 'index'])->name('users.index');
        //用户信息
        Route::get('/users/{user}',  [UserController::class, 'show'])->name('users.show');
        //用户退出
        Route::get('/logout',  [UserController::class, 'logout'])->name('users.logout');
    });
    //todo ...
    Route::middleware('admin.refresh')->group(function () {

    });
});
