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


//login page
Route::view('/login', 'auth.login')->name('loginPage');


// for admin panel navigation
// Route::view('/admin/dashboard', 'admin.adminHome')->name('admin.home');
Route::view('/admin/massage', 'admin.masage')->name('admin.massage');
Route::view('/admin/review', 'admin.review')->name('admin.review');
Route::view('/admin/addBlog', 'admin.addBlog')->name('admin.addBlog');


//admin user manage
Route::get('/admin/manageUsers', [AdminController::class, 'index'])->name('admin.manageUsers');
Route::delete('/admin/manageUsers/{id}', [AdminController::class, 'destroy'])->name('admin.user.destroyBlog');


// for user profile
Route::middleware('auth')->group(function () {
    Route::get('/profile/Booking', [BookingController::class, 'index'])->name('profile.Booking');
    Route::get('/profile/invoice', [BookingController::class, 'indexInvoice'])->name('profile.Invoice');
    Route::get('/profile/invoice/{id}', [BookingController::class, 'invoiceDetails'])->name('profile.showInvoiceDetails');
    Route::post('/profile/invoice/{id}', [BookingController::class, 'paymentReceiptImage'])->name('user.payment.receipt.image');
    Route::post('/profile/invoice/{id}/payment-receipt', [BookingController::class, 'paymentReceiptImage'])->name('user.payment.receipt.image');

});


//payment Receipt Image Acccept
Route::post('/profile/invoice/{id}', [BookingController::class, 'paymentReceiptImageAcccept'])->name('admin.payment.receipt.image.Acccept');
//payment Receipt Image Reject
Route::post('/profile/invoice/a/{id}', [BookingController::class, 'paymentReceiptImageReject'])->name('admin.payment.receipt.image.Reject');


// show login
Route::get('/login', [BookingController::class, 'showLoginView'])->name('loginPage');


//for user booking
Route::post('/package', [BookingController::class, 'store'])->name('user.booking.store');


//for admin booking details
Route::get('/admin/Booking', [BookingController::class, 'showAllBookingData'])->name('admin.booking');
Route::get('/admin/Booking/{id}', [BookingController::class, 'showOneUserBookingDataAll'])->name('admin.showOneUserBookingDataAll');


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile/Dashbord', [ProfileController::class, 'index'])->name('profile.Dashbord');
    Route::get('/profile/Edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/profile/Edit/password', [ProfileController::class, 'editPassword'])->name('profile.profileChangePassword');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
});

require __DIR__.'/auth.php';


// for admin
Route::middleware('auth')->group(function () {
    Route::get('/admin/setting', [AdminController::class, 'indexAdminSetting'])->name('admin.setting');
    // Route::get('/profile/Edit', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::get('/profile/Edit/password', [ProfileController::class, 'editPassword'])->name('profile.profileChangePassword');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
});

require __DIR__.'/auth.php';

// Route::view('/admin/dashboard', 'admin.adminHome')->name('admin.home');
Route::get('/admin/dashboard', [AdminController::class, 'indexAdminDashboard'])->name('admin.home');


// for admin blog post (funtions start)
Route::controller(BlogController::class)->group(function(){
    Route::post('/admin/addBlog', 'store')->name('admin.add.blog');
    Route::get('/admin/addBlog', 'showBlogs')->name('admin.addBlog');
    Route::get('/admin/{blogPost}/editBlog', 'edit')->name('admin.editBlog');
    Route::put('/admin/{blogPost}', 'update')->name('admin.updateBlog');
    Route::delete('/admin/{blogPost}', 'destroy')->name('admin.destroyBlog');
});


// for user | show Blog & post 
Route::get('/blog', [BlogController::class, 'showBlogsForUser'])->name('blog');
Route::get('/blog/page{blogPost}', [BlogController::class, 'showBlogPageForUser'])->name('blog.page');


//admin Travel Package
Route::Get('admin/addPackage/page', [TravelPackageController::class, 'index'])->name('admin.addPackage.create');
Route::post('admin/addPackage/page', [TravelPackageController::class, 'store'])->name('admin.addPackage.store');
Route::get('/admin/showPackage', [TravelPackageController::class, 'showForAdmin'])->name('admin.travelPackage.show');


// for user | show Travel Packages & Package page 
Route::get('package', [TravelPackageController::class, 'showForUser'])->name('user.travelPackage.show');
Route::get('/package/page{TravelPackage}', [TravelPackageController::class, 'showTravelPackagePage'])->name('user.packagePage');
Route::get('/package/page{TravelPackage}/edit', [TravelPackageController::class, 'edit'])->name('admin.editTravelPackage');
Route::put('/package/page{TravelPackage}', [TravelPackageController::class, 'update'])->name('admin.updateTravelPackage');
Route::delete('/package/page{TravelPackage}', [TravelPackageController::class, 'destroy'])->name('admin.deleteTravelPackage');


//for user massage
Route::get('/contactUs', [UserMassageController::class, 'index'])->name('contactUs');
Route::post('/contactUs', [UserMassageController::class, 'store'])->name('user.contactUs.store');
//for admin massage
Route::get('/admin/massage', [UserMassageController::class, 'show'])->name('admin.massage');
Route::delete('/admin/massage/{userMassage}', [UserMassageController::class, 'destroy'])->name('admin.massage.delete');
