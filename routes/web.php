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


Route::get('/gallery', function () {
    return view('pages.gallery');
})->name('gallery');
// done

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact us');


Route::get('/about', function () {
    return view('pages.about');
})->name('about us');
// done


Route::get('/enroll', function () {
    return view('pages.enroll');
})->name('enroll');



Route::get('/error', function () {
    return view('errors.404');
})->name('error');


Route::get('/program', function () {
    return view('pages.programs');
})->name('program');


Route::get('/blog', function () {
    return view('pages.blog');
})->name('blog');



// Route::get('/blog2}', function () {
//     $blog = 1;
//     return view('pages.blog_details', compact('blog'));
// })->name('blog.show');



Route::get('blog/1/show', function () {
    // dd('fufu');
    $blog = 1;
    return view('pages.blog_details');
})->name('blog.show');





/*
|--------------------------------------------------------------------------
| Unavailable Routes At The Moment
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



// Not yet available
// Route::get('/team', function () {
//     return view('pages.team');
// })->name('staff');

// Not yet available
// Route::get('/facility', function () {
//     return view('pages.facilities');
// })->name('facilities');


// ======================================END OF MAIN ROUTES==================================

Route::get('/guest', function () {
    return view('layouts.guest');
});


Route::get('/ugo', function () {
    return view('layouts.guest');
});
