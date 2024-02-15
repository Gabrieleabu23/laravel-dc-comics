<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

Route :: get('/', [MainController :: class, 'index'])
    -> name('users.index');

    Route :: get('/users/create', [MainController :: class, 'create'])
    -> name('users.create');
Route :: post('/users', [MainController :: class, 'store'])
    -> name('users.store');

Route :: get('/users/{id}', [MainController :: class, 'show'])
    -> name('users.show');