<?php

use App\Http\Controllers\AlumniHMTGController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GEOIFairController;
use App\Http\Controllers\HutHMTGController;
use App\Http\Controllers\OrienteeringNasionalController;
use App\Http\Controllers\PPAMController;
use App\Http\Controllers\UserLandingController;
use App\Http\Controllers\UserPPAMController;
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

Route::get('/alumni-hmtg', function () {
    return view('user-alumni.index');
});


// Route::get('/dashboard', function () {
//     return view('admin-dashboard.index');
// });

// Route::resource('/program-kerja/p-pam', UserPPAMController::class, [
//     'as' => 'programkerja'
// ]);

Route::get('/program-kerja/p-pam', [UserPPAMController::class, 'show'])->name('program-kerja.p-pam.show');



Auth::routes();

Route::middleware(['auth'])->group(function () {

    Route::resource('/dashboard', DashboardController::class);


    Route::resource('/p-pam', PPAMController::class);
    Route::post('/upload/p-pam', [PPAMController::class, 'upload'])->name('ckeditor.upload.ppam');


    Route::resource('/orienteering-nasional', OrienteeringNasionalController::class);
    Route::post('/upload/orienteering-nasional', [OrienteeringNasionalController::class, 'upload'])->name('ckeditor.upload.orienteering');

    Route::resource('/geoi-fair', GEOIFairController::class);
    Route::post('/upload/geoi-fair', [GEOIFairController::class, 'upload'])->name('ckeditor.upload.geoi');

    Route::resource('/hut-hmtg', HutHMTGController::class);
    Route::post('/upload/hut-hmtg', [HutHMTGController::class, 'upload'])->name('ckeditor.upload.hut');

    Route::resource('/alumni', AlumniHMTGController::class);


});