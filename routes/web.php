<?php

use Src\Route;

Route::add('GET', '/hello', [Controller\Site::class, 'hello'])
    ->middleware('auth');
Route::add(['GET', 'POST'], '/signup', [Controller\Site::class, 'signup']);
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);
Route::add('GET', '/logout', [Controller\Site::class, 'logout']);
Route::add(['GET', 'POST'], '/addbook', [Controller\Site::class, 'add_book']);
Route::add(['GET', 'POST'], '/addreader', [Controller\Site::class, 'add_reader']);
Route::add(['GET', 'POST'], '/addlib', [Controller\Site::class, 'add_lib']);