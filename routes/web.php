<?php

use App\Http\Controllers\AlumniHMTGController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GEOIFairController;
use App\Http\Controllers\HutHMTGController;
use App\Http\Controllers\OrienteeringNasionalController;
use App\Http\Controllers\PPAMController;
use App\Http\Controllers\UserAlumniController;
use App\Http\Controllers\UserGEOIFairController;
use App\Http\Controllers\UserHutHMTGController;
use App\Http\Controllers\UserLandingController;
use App\Http\Controllers\UserOrienteeringNasionalController;
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



Route::get('/program-kerja/p-pam', [UserPPAMController::class, 'index'])->name('program-kerja.p-pam.index');
Route::get('/program-kerja/p-pam/{slug}', [UserPPAMController::class, 'show'])->name('program-kerja.p-pam.show');

Route::get('/program-kerja/orienteering-nasional', [UserOrienteeringNasionalController::class, 'index'])->name('program-kerja.orienteering.index');
Route::get('/program-kerja/orienteering-nasional/{slug}', [UserOrienteeringNasionalController::class, 'show'])->name('program-kerja.orienteering.show');

Route::get('/program-kerja/geoi-fair', [UserGEOIFairController::class, 'index'])->name('program-kerja.geoi.index');
Route::get('/program-kerja/geoi-fair/{slug}', [UserGEOIFairController::class, 'show'])->name('program-kerja.geoi.show');

Route::get('/program-kerja/hut-hmtg-geoi', [UserHutHMTGController::class, 'index'])->name('program-kerja.hut.index');
Route::get('/program-kerja/hut-hmtg-geoi/{slug}', [UserHutHMTGController::class, 'show'])->name('program-kerja.hut.show');

Route::get('/alumni-hmtg', [UserAlumniController::class, 'index'])->name('alumni-hmtg.index');




Auth::routes([
    'register' => false,
]);

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

    Route::get('/alumni/export', [AlumniHMTGController::class, 'alumniExport'])->name('alumni-export');
    Route::resource('/alumni', AlumniHMTGController::class);
    Route::post('/alumni/{id}/update', [AlumniHMTGController::class, 'update']);
    Route::post('/alumni/import', [AlumniHMTGController::class, 'alumniImport'])->name('alumni-import');
    
});