<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('welcome');
});

//user
Route::get('user/pages/home',[UserController::class,'home'])->name('user.home');



