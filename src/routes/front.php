<?php
use illuminate\Support\Facades\Route;

Route::get('/', 'Front\PostController@index')->name('home');
Route::resource('posts', 'Front\PostController')->only(['index', 'show']);
