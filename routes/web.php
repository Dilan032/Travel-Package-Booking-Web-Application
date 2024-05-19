<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BookingController;

//for user navigationbar  
Route::view('/', 'user/home')->name('home');
Route::view('/package', 'user/package')->name('package');
Route::view('/package/page', 'user/packagePage')->name('packagePage');
Route::view('/aboutUs', 'user/aboutUs')->name('aboutUs');
Route::view('/contactUs', 'user/contactUs')->name('contactUs');
// Route::view('/blog', 'user/blog')->name('blog');
Route::view('/blogPage', 'user/blogPage')->name('blogPage');

// for admin panel navigation
Route::view('/admin/dashboard', 'admin.adminHome')->name('admin.home');
Route::view('/admin/setting', 'admin.setting')->name('admin.setting');
Route::view('/admin/manageUsers', 'admin.manageUsers')->name('admin.manageUsers');
Route::view('/admin/booking', 'admin.bookingDetails')->name('admin.booking');
Route::view('/admin/massage', 'admin.masage')->name('admin.massage');
Route::view('/admin/review', 'admin.review')->name('admin.review');
Route::view('/admin/addPackage', 'admin.addtravelPackage')->name('admin.addPackage');
Route::view('/admin/addBlog', 'admin.addBlog')->name('admin.addBlog');


// for user profile
Route::get('/profile/Booking', [BookingController::class, 'index'])->name('profile.Booking');
Route::get('/profile/invoice', [BookingController::class, 'indexInvoice'])->name('profile.Invoice');

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

// for admin blog post (funtions start)
Route::controller(BlogController::class)->group(function(){
    Route::post('/admin/addBlog', 'store')->name('admin.add.blog');
    Route::get('/admin/addBlog', 'showBlogs')->name('admin.addBlog');
    Route::get('/admin/{blogPost}/editBlog', 'edit')->name('admin.editBlog');
    Route::put('/admin/{blogPost}', 'update')->name('admin.updateBlog');
    Route::delete('/admin/{blogPost}', 'destroy')->name('admin.destroyBlog');
});


// for user 
Route::get('/blog', [BlogController::class, 'showBlogsForUser'])->name('blog');
Route::get('/blog/page{blogPost}', [BlogController::class, 'showBlogPageForUser'])->name('blog.page');