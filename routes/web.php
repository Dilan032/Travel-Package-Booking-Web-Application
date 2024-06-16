<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\TravelPackageController;
use App\Http\Controllers\UserMassageController;


//for user navigationbar  
Route::view('/', 'user/home')->name('home');
Route::view('/aboutUs', 'user/aboutUs')->name('aboutUs');
Route::view('/blogPage', 'user/blogPage')->name('blogPage');

//user profile Dashbord
Route::middleware('auth')->group(function () {
    Route::get('/profile/Dashbord', [ProfileController::class, 'index'])->name('profile.Dashbord');
    Route::get('/profile/Edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/profile/Edit/password', [ProfileController::class, 'editPassword'])->name('profile.profileChangePassword');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
});

require __DIR__.'/auth.php';

//login page
Route::view('/login', 'auth.login')->name('loginPage');
// show login for user before book package
Route::get('/login', [BookingController::class, 'showLoginView'])->name('loginPage');
//for user booking
Route::post('/package', [BookingController::class, 'store'])->name('user.booking.store');

// for user | show Travel Packages & Package page 
Route::controller(TravelPackageController::class)->group(function(){
    Route::get('package', 'showForUser')->name('user.travelPackage.show');
    Route::get('/package/page{TravelPackage}', 'showTravelPackagePage')->name('user.packagePage');
    Route::get('/package/page{TravelPackage}/edit', 'edit')->name('admin.editTravelPackage');
    Route::put('/package/page{TravelPackage}', 'update')->name('admin.updateTravelPackage');
    Route::delete('/package/page{TravelPackage}', 'destroy')->name('admin.deleteTravelPackage');
});

// for user profile Dashbord Booking and invoice
Route::middleware('auth')->group(function () {
    Route::get('/profile/Booking', [BookingController::class, 'index'])->name('profile.Booking');
    Route::get('/profile/invoice', [BookingController::class, 'indexInvoice'])->name('profile.Invoice');
    Route::get('/profile/invoice/{id}', [BookingController::class, 'invoiceDetails'])->name('profile.showInvoiceDetails');
    Route::post('/profile/invoice/{id}', [BookingController::class, 'paymentReceiptImage'])->name('user.payment.receipt.image');
    Route::post('/profile/invoice/{id}/payment-receipt', [BookingController::class, 'paymentReceiptImage'])->name('user.payment.receipt.image');
});

// for user | show Blog & post 
Route::controller(BlogController::class)->group(function(){
    Route::get('/blog', 'showBlogsForUser')->name('blog');
    Route::get('/blog/page{blogPost}', 'showBlogPageForUser')->name('blog.page');
});

//for user massage
Route::controller(UserMassageController::class)->group(function(){
    Route::get('/contactUs', 'index')->name('contactUs');
    Route::post('/contactUs', 'store')->name('user.contactUs.store');
});




// Admin routes start

// for admin panel navigation
Route::view('/admin/massage', 'admin.masage')->name('admin.massage');
Route::view('/admin/review', 'admin.review')->name('admin.review');
Route::view('/admin/addBlog', 'admin.addBlog')->name('admin.addBlog');
Route::get('/admin/dashboard', [AdminController::class, 'indexAdminDashboard'])->name('admin.home');
// for admin setting
Route::middleware('auth')->group(function () {
    Route::get('/admin/setting', [AdminController::class, 'indexAdminSetting'])->name('admin.setting');
});

require __DIR__.'/auth.php';


//admin can user's manage
Route::controller(AdminController::class)->group(function(){
    Route::get('/admin/manageUsers', 'index')->name('admin.manageUsers');
    Route::delete('/admin/manageUsers/{id}', 'destroy')->name('admin.user.destroyBlog');
});

//for admin booking 
Route::controller(BookingController::class)->group(function(){
    //for admin booking details
    Route::get('/admin/Booking',  'showAllBookingData')->name('admin.booking');
    Route::get('/admin/Booking/{id}',  'showOneUserBookingDataAll')->name('admin.showOneUserBookingDataAll');
    //For Admin payment Receipt Image Acccept or Reject
    Route::post('/profile/invoice/{id}',  'paymentReceiptImageAcccept')->name('admin.payment.receipt.image.Acccept');
    Route::post('/profile/invoice/a/{id}',  'paymentReceiptImageReject')->name('admin.payment.receipt.image.Reject');
});

// for admin blog post (funtions start)
Route::controller(BlogController::class)->group(function(){
    Route::post('/admin/addBlog', 'store')->name('admin.add.blog');
    Route::get('/admin/addBlog', 'showBlogs')->name('admin.addBlog');
    Route::get('/admin/{blogPost}/editBlog', 'edit')->name('admin.editBlog');
    Route::put('/admin/{blogPost}', 'update')->name('admin.updateBlog');
    Route::delete('/admin/{blogPost}', 'destroy')->name('admin.destroyBlog');
});

//admin Travel Package
Route::controller(TravelPackageController::class)->group(function(){
    Route::Get('admin/addPackage/page', 'index')->name('admin.addPackage.create');
    Route::post('admin/addPackage/page', 'store')->name('admin.addPackage.store');
    Route::get('/admin/showPackage', 'showForAdmin')->name('admin.travelPackage.show');
});

//for admin massage
Route::controller(UserMassageController::class)->group(function(){
    Route::get('/admin/massage', 'show')->name('admin.massage');
    Route::delete('/admin/massage/{userMassage}', 'destroy')->name('admin.massage.delete');
});
