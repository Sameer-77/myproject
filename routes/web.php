<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\HomeContentController;
use App\Http\Controllers\Admin\FooterController;
use App\Http\Controllers\PageController;

// Public Pages
Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/competitions', [PageController::class, 'competitions'])->name('competitions');
Route::get('/marketplace', [PageController::class, 'marketplace'])->name('marketplace');
Route::get('/equine-directory', [PageController::class, 'equineDirectory'])->name('equine-directory');
Route::get('/join', [PageController::class, 'join'])->name('join');
Route::get('/sell-here', [PageController::class, 'sellHere'])->name('sell-here');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// Blog Routes
Route::get('/blog', [PageController::class, 'blogIndex'])->name('blog.index');
Route::get('/blog/{id}', [PageController::class, 'blogShow'])->name('blog.show');

// Authentication Routes
Auth::routes();

// Admin Dashboard Routes
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