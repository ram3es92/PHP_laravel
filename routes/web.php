<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home' , [
        'name' => 'John',
        'age' => 10,
        'position' => 'Two',
        'address' => 'Mellow street',
    ]);
});

Route::get('/contacts', function () {
    return view('contacts' , [
        'email' => '',
        'post_code' => 654000,
        'phone' => '88-32-17',
        'address' => 'Mellow street',
    ]);
});