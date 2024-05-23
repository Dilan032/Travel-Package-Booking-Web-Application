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
Route::view('/admin/dashboard', 'admin.adminHome')->name('admin.home');
Route::view('/admin/setting', 'admin.setting')->name('admin.setting');
Route::view('/admin/manageUsers', 'admin.manageUsers')->name('admin.manageUsers');
Route::view('/admin/booking', 'admin.bookingDetails')->name('admin.booking');
Route::view('/admin/massage', 'admin.masage')->name('admin.massage');
Route::view('/admin/review', 'admin.review')->name('admin.review');
Route::view('/admin/addBlog', 'admin.addBlog')->name('admin.addBlog');


Route::middleware('auth')->group(function () {
// for user profile
Route::get('/profile/Booking', [BookingController::class, 'index'])->name('profile.Booking');
Route::get('/profile/invoice', [BookingController::class, 'indexInvoice'])->name('profile.Invoice');
});

// show login
Route::get('/login', [BookingController::class, 'showLoginView'])->name('loginPage');



//for user booking
Route::post('/package', [BookingController::class, 'store'])->name('user.booking.store');
// Route::get('/blog', [BlogController::class, 'show'])->name('profile.Booking');




// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile/Dashbord', [ProfileController::class, 'index'])->name('profile.Dashbord');
    Route::get('/profile/Edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/profile/Edit/password', [ProfileController::class, 'editPassword'])->name('profile.profileChangePassword');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile/{}', [ProfileController::class, 'destroy'])->name('profile.destroy');
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


//for admin massage
Route::get('/admin/massage', [UserMassageController::class, 'showMasage'])->name('admin.massage');

//for user massage
// Route::view('/contactUs', 'user/contactUs')->name('contactUs');
Route::get('/contactUs', [UserMassageController::class, 'contactUsShow'])->name('contactUs');
Route::post('/contactUs', [UserMassageController::class, 'store'])->name('user.massage.store');