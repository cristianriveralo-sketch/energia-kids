<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('energy-home');
})->name('energia.home');

Route::get('/juegos', function () {
    return view('energy-activities');
})->name('energia.activities');

Route::get('/tareas', function () {
    return view('energy-homework');
})->name('energia.homework');
