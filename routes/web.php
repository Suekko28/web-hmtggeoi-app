<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('user-landing.index');
});

Route::get('/contact', function () {
    return view('user-contact.index');
});

Route::get('/profile', function () {
    return view('user-profile.index');
});
Route::get('/p-pam', function () {
    return view('user-p-pam.index');
});
