<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

Route::get('/', function () {
    return view('form');
});

Route::get('get-employee-data', [EmployeeController::class, 'index'])->name('form');

Route::post('/store_form', [EmployeeController::class, 'store']);

Route::put('/employee/{id}', [EmployeeController::class, 'update']);

Route::get('/data', [EmployeeController::class, 'saveApiData']);