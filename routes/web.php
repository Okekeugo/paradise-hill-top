<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\DB;
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
    $all_posts = DB::table('posts')->get();
    return view('pages.blog', compact('all_posts'));
})->name('blog');

// route to view a single blog post
Route::get('blog/{post_id}', function ($post_id) {
    // dd('fufu');
    $post = DB::table('posts')->find($post_id);
    // $blog = 1;
    return view('pages.blog_details', compact('post'));
})->name('blog.show');



/*
|--------------------------------------------------------------------------
| Admin Routes For Managing Posts
|--------------------------------------------------------------------------
|
*/



// view all posts in db
Route::get('/posts/index', [PostController::class, 'index'])->name('posts.index');

// store a post in db
Route::post('/posts/store', [PostController::class, 'store'])->name('posts.store');


// display form for creating a post
Route::get('/posts/create', [PostController::class, 'create'])->name('Create Post');

// Route to edit a single blog post (display form to edit post)
Route::get('posts/{slug}/edit', [PostController::class, 'edit'])->name('posts.edit');

// Route to update a single blog post
Route::patch('posts/{slug}', [PostController::class, 'update'])->name('posts.update');

// delete images for a particular post
Route::get('img/del/{post_id}/{imgkey}', [PostController::class, 'deleteImg'])->name('img.delete');

// Route to delete a single blog post
Route::get('posts/del/{post_id}', [PostController::class, 'destroy'])->name('posts.destroy');


##########################################
####EOL Admin Routes For Managing Posts###
##########################################


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
