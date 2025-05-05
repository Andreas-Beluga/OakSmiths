<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

Route::get('/', function () {
    return view('test');
});

Route::get('/test', [TestController::class, 'test'])->name('test');

