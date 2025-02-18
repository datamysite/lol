<?php

use Illuminate\Support\Facades\Route;


//Migration
Route::get('/migrate', function () {
    Artisan::call('migrate:rollback --step=1');
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('migrate');
    //Artisan::call('migrate', ['--force' => true ]);
    dd('migrated!');
});

Route::get('/', function () {
    return view('index');
});

Route::get('/beta', function () {
    return view('welcome');
});
