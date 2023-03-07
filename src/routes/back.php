<?php

use App\Http\Controllers\Back\DashboardController;
use illuminate\Support\Facades\Route;

Route::get('/', 'Back\DashboardController')->name('dashboard');
