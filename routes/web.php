<?php

use Illuminate\Support\Facades\Route;


//Migration
Route::get('/migrate', function () {
    Artisan::call('migrate');
    //Artisan::call('migrate', ['--force' => true ]);
    dd('migrated!');
});

Route::get('/', function () {
    return view('index');
});
