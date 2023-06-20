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
});



Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/gallery', function () {
    return view('pages.gallery');
});

Route::get('/event', function () {
    return view('pages.event');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/404', function () {
    return view('pages.error');
});

Route::get('/404', function () {
    return view('pages.error');
});

Route::get('/enroll', function () {
    return view('pages.enroll');
});

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
