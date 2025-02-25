<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\UserController;
use App\Models\Provider;
use App\Models\SubCategory;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/abc', function () {
    echo "hello";
})->middleware('admin');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::resource('/erp/services',ServiceController::class);
Route::resource('/erp/categories',CategoryController::class);
Route::resource('/erp/users',UserController::class);
Route::resource('/erp/customers',CustomerController::class);
Route::resource('/erp/providers',ProviderController::class);
Route::resource('/erp/bookings',BookingController::class);
Route::resource('/erp/subcategorys',SubCategoryController::class);






Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/admin', function () {
    return view('admin');
});
Route::get('/services', function () {
    return view('pages.services');
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
Route::get('/search', function () {
    return view('pages.search');
});
Route::get('/booking', function () {
    return view('pages.booking');
});

Route::get('/invoice',[CustomerController::class,'invoice',]);
Route::post('find_customer', [BookingController::class, 'find_customer']);
Route::get('/search', [ServiceController::class, 'frontServicePage', 'services']);




Route::get('/', function () {
    return view('index');
});





