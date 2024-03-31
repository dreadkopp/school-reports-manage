<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return redirect(route('filament.reports.auth.login'));
})->name('login');

Route::get('/', function () {
    return redirect(route('filament.reports.auth.login'));
});
