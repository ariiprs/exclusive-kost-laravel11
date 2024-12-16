<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return redirect()->route('login');
// });


// its for the dashboard view
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', [FrontController::class, 'index'])->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/all-categories', [FrontController::class, 'allCategories'])->name('front.all_categories');

    Route::get('/testimonial', [FrontController::class, 'testimonial'])->name('front.testimonial');

    Route::get('/search-category', [FrontController::class, 'searchCategory'])->name('front.search_category');

    Route::get('/browse/{category:slug}', [FrontController::class, 'category'])->name('front.category');

    /* ini untuk search sepatu */
    Route::get('/search', [FrontController::class, 'search'])->name('front.search');

    Route::get('/contact', [FrontController::class, 'contact'])->name('front.contact');

    Route::get('/search-category', [FrontController::class, 'searchCategory'])->name('front.search_category');

    Route::get('/browse/{category:slug}', [FrontController::class, 'category'])->name('front.category');

    Route::get('/details/{kost:slug}', [FrontController::class, 'details'])->name('front.details');





});

require __DIR__.'/auth.php';
