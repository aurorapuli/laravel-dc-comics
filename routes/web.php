<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;

Route::get('/', [MainController :: class, 'index']) -> name('users.index');

Route::get('/users/{id}', [MainController :: class, 'show']) -> name('users.show');
