<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/founder', function () {
    $data = [
        'name'=> 'Taylor',
        'surname' => 'Otwell',
    ];
    return view('pages.founder', $data);
})->name('founder');

Route::get('/info', function () {
    $info = [
        'type'=> 'MVC',
        'use' => 'development for web applications',
        'license' => 'MIT',
        'framework'=> 'Symfony',
    ];
    return view('pages.info', $info);
})->name('info');