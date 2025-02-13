<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/admin', function () {
    return view('admin');
});
Route::get('/about-us', function () {
    return view('pages.about');
});
Route::get('/blog', function () {
    return view('pages.blog');
});
Route::get('/contact', function () {
    return view('pages.contact');
});
Route::get('/how-it-works', function () {
    return view('pages.how-it-works');
});
Route::get('/provider-register', function () {
    return view('pages.become-provider');
});



Route::get('/', function () {
    return view('index');
});




