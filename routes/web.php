<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\HomeContentController;
use App\Http\Controllers\Admin\FooterController;

// Route::get('/', function () {
//     return view('welcome');
// });


// Home page
Route::get('/', function () {
    return view('index'); // resources/views/index.blade.php
});

// Competitions
Route::get('/', function () {
    return view('competitions'); // resources/views/competitions.blade.php
});

// Blog page
Route::get('/blog', function () {
    return view('blog'); // resources/views/blog.blade.php
});

// Marketplace page
Route::get('/marketplace', function () {
    return view('marketplace'); // resources/views/marketplace.blade.php
});

// Join page
Route::get('/join', function () {
    return view('join'); // resources/views/join.blade.php
});

// Sell Here page
Route::get('/sell-here', function () {
    return view('sell-here'); // resources/views/sell-here.blade.php
});

// Contact page
Route::get('/contact', function () {
    return view('contact'); // resources/views/contact.blade.php
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::prefix('equestrian')->group(function () {
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class, 'login']);
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');

    Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('register', [RegisterController::class, 'register']);
});


Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {

    // Dashboard
    Route::get('/', [AdminController::class, 'index'])->name('dashboard');

    // Blog CRUD
    Route::resource('blogs', BlogController::class);

    // Contact CRUD
    Route::resource('contacts', ContactController::class);

    // Home Content CRUD
    Route::resource('home_contents', HomeContentController::class);

    // Footer CRUD
    Route::resource('footers', FooterController::class);
});

Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{blog}', [BlogController::class, 'show'])->name('blog.show');

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::resource('home_contents', App\Http\Controllers\Admin\HomeContentController::class);
});