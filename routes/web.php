<?php

use App\Http\Controllers\ContactMailController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TestimonialController;

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
    $testimonials = DB::table('testimonials')->get();
    // dd($testimonials[0]);
    return view('pages.welcome', compact('testimonials'));
})->name('welcome');
// done


Route::get('/gallery', function () {
    return view('pages.gallery');
})->name('gallery');
// done

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact us');

// Contact Mail Route
Route::post('/contact', [ContactMailController::class, 'index'])->name('send-contact-mail');

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

Route::get('blog', [PostController::class, 'blog'])->name('blog');

// route to view a single blog post
Route::get('blog/{post_id}', [PostController::class, 'show'])->name('blog.show');





/*
|--------------------------------------------------------------------------
| Admin Routes For Managing Posts
|--------------------------------------------------------------------------
|
*/



// view all posts in db
Route::get('/posts/index', [PostController::class, 'index'])->name('posts.index');

// display form for creating a post
Route::get('/posts/create', [PostController::class, 'create'])->name('Create Post');

// store a post in db
Route::post('/posts/store', [PostController::class, 'store'])->name('posts.store');

// Route to edit a single blog post (display form to edit post)
Route::get('posts/{slug}/edit', [PostController::class, 'edit'])->name('posts.edit');

// Route to update a single blog post
Route::patch('posts/{slug}', [PostController::class, 'update'])->name('posts.update');

// delete images for a particular post
Route::get('img/del/{post_id}/{imgkey}', [PostController::class, 'deleteImg'])->name('img.delete');

// Route to delete a single blog post
Route::get('posts/del/{post_id}', [PostController::class, 'destroy'])->name('posts.destroy');

####################################################################################
#####################EOL Admin Routes For Managing Posts############################
####################################################################################


/*
|--------------------------------------------------------------------------
| Admin Routes For Managing Testimonials
|--------------------------------------------------------------------------
|
*/

// view all Testimonials in db
Route::get('/testimonials/index', [TestimonialController::class, 'index'])->name('testimonials.index');

// display form for creating a testimonial
Route::get('/testimonials/create', [TestimonialController::class, 'create'])->name('testimonials.create');

// store a testimonial in db
Route::post('/testimonials/store', [TestimonialController::class, 'store'])->name('testimonials.store');

// Route to edit a single testimonial (display form to edit testimonial)
Route::get('testimonials/{testimonial}/edit', [TestimonialController::class, 'edit'])->name('testimonials.edit');

// Route to update a single testimonial
Route::patch('testimonials/{testimonial_id}', [TestimonialController::class, 'update'])->name('testimonials.update');

// Route to delete a single testimonial
Route::get('testimonials/del/{testimonial_id}', [TestimonialController::class, 'destroy'])->name('testimonials.destroy');

// delete images for a particular post
Route::get('img/del/{testimonial_id}', [TestimonialController::class, 'deleteImg'])->name('testimonial_img.delete');

####################################################################################
#####################EOL Admin Routes For Managing Posts############################
####################################################################################


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
