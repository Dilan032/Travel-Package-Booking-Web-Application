<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingController;

// For navigationBar user
Route::get('/package', function () {
    return view('user/package');
})->name('package');

Route::get('/package/page', function () {
    return view('user/packagePage');
})->name('packagePage');

Route::get('/aboutUs', function () {
    return view('user/aboutUs');
})->name('aboutUs');

Route::get('/contactUs', function () {
    return view('user/contactUs');
})->name('contactUs');

Route::get('/blog', function () {
    return view('user/blog');
})->name('blog');

Route::get('/blogPage', function () {
    return view('user/blogPage');
})->name('blogPage');


// home page
Route::get('/', function () {
    return view('user/home');
})->name('home');


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile/Dashbord', [ProfileController::class, 'index'])->name('profile.Dashbord');
    Route::get('/profile/Edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/profile/Edit/password', [ProfileController::class, 'editPassword'])->name('profile.profileChangePassword');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/profile/Booking', [BookingController::class, 'index'])->name('profile.Booking');
Route::get('/profile/invoice', [BookingController::class, 'indexInvoice'])->name('profile.Invoice');

// for admin panel navigation
Route::view('/admin/dashboard', 'admin.adminHome')->name('admin.home');
Route::view('/admin/setting', 'admin.setting')->name('admin.setting');
Route::view('/admin/manageUsers', 'admin.manageUsers')->name('admin.manageUsers');
Route::view('/admin/booking', 'admin.bookingDetails')->name('admin.booking');
Route::view('/admin/massage', 'admin.masage')->name('admin.massage');
Route::view('/admin/review', 'admin.review')->name('admin.review');
Route::view('/admin/addPackage', 'admin.addtravelPackage')->name('admin.addPackage');
Route::view('/admin/addBlog', 'admin.addTravelPackage')->name('admin.addBlog');