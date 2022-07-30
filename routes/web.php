<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentController;

Route::resource('/student', StudentController::class)->middleware('auth');

Route::get('/', function () {
    return view('welcome');
});

require __DIR__.'/auth.php';
