<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';

//!------ front Route -----------------------

Route::prefix('/')->name('front.')->group(function () {
    //?------------ index page --------------------
     Route::view('', 'front.index')->name('index');
    //?------------ about page --------------------
     Route::view('about', 'front.about')->name('about');
    //?------------ about page --------------------
     Route::view('contact', 'front.contact')->name('contact');
    //?------------ project page --------------------
     Route::view('project', 'front.projects')->name('projects');
    //?------------ services page --------------------
     Route::view('services', 'front.services')->name('services');
    //?------------ team page --------------------
     Route::view('team', 'front.team')->name('team');
    //?------------ testimonial page --------------------
     Route::view('testimonial', 'front.testimonial')->name('testimonial');

});
//!------ dashboard Route -----------------------

Route::prefix('/dashboard/')->name('dashboard.')->group(function () {
    Route::middleware('admin')->group(function() {
    //?------------ index page --------------------
    Route::view('', 'dashboard.index')->name('index'); 
    //?------------ settings page --------------------
    Route::view('settings', 'dashboard.settings.index')->name('settings'); 
    //?------------ settings page --------------------
    Route::view('skills', 'dashboard.skills.index')->name('skills'); 


});
    //?------------ LOGIN PAGE --------------------
     Route::view('/login', 'dashboard.auth.login')->middleware('guest:admin')->name('login');
 
});