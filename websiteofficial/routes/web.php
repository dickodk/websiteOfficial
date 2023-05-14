<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

#auth
#Route::get('/login', [AuthController::class, 'login']);


Route::prefix('backend')->group(function(){
    Route::get('dasboard', [AdminController::class,'dasboard']);
});
