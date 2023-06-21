<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.welcome');
})->name('welcome');
// done


Route::get('/about', function () {
    return view('pages.about');
})->name('about us');
// done

Route::get('/gallery', function () {
    return view('pages.gallery');
})->name('gallery');
// done


Route::get('/event', function () {
    return view('pages.event');
});
// done

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/error', function () {
    return view('errors.404');
});

Route::get('/enroll', function () {
    return view('pages.enroll');
})->name('enroll');

Route::get('/blog', function () {
    return view('pages.blog');
});

Route::get('/team', function () {
    return view('pages.team');
});

Route::get('/facility', function () {
    return view('pages.facilities');
});

Route::get('/program', function () {
    return view('pages.program');
});

// ==================================

Route::get('/guest', function () {
    return view('layouts.guest');
});


Route::get('/ugo', function () {
    return view('layouts.guest');
});
