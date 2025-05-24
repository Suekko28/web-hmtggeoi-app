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
    return view('user-p-pam.show');
});

Route::get('/p-pam/detail', function () {
    return view('user-p-pam.index');
});

Route::get('/alumni', function () {
    return view('user-alumni.index');
});


Route::get('/dashboard', function () {
    return view('admin-dashboard.index');
});