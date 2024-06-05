<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\booking;
use App\Models\travelPackage;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function index()
    {
        $User = User::with('bookings')->orderBy('created_at', 'DESC')->get();
        // count all users
        $allRegisterUsers = User::count();
        // count all Reservations
        $allReservation = Booking::whereIn('reservation_status', ['pending', 'Conform', 'Reject'])->count();
        

        return view('admin.manageUsers', compact('User','allRegisterUsers','allReservation')); 
    }

    // delete user
    public function destroy($id){
        $User = User::findOrFail($id);

        //delete bolg post from database
        $User->delete();

        return redirect()->route('admin.manageUsers')->with('success', 'User account deleted successfully');
    }

 // admin page setting
    public function indexAdminSetting()
    {
         // Retrieve the currently logged-in user
         $user = Auth::user();
         // Return a view with the user's details
         return view('admin.setting', ['user' => $user]); 
    }

    //Admin Dashboard
    public function indexAdminDashboard()
    {
        
         // count number for Reservation
         $pendingCountReservation = Booking::where('reservation_status', 'pending')->count();
         $conformCountReservation = Booking::where('reservation_status', 'Conform')->count();
         $rejectedCountReservation = Booking::where('reservation_status', 'Reject')->count();
         $allReservation = Booking::whereIn('reservation_status', ['pending', 'Conform', 'Reject'])->count();
 
         // count number for payment
         $pendingCountPayment = Booking::where('payment_status', 'pending')->count();
         $conformCountPayment = Booking::where('payment_status', 'Success')
         ->where('reservation_status', 'pending')
         ->count();
         $rejectedCountPayment = Booking::where('payment_status', 'Reject')->count();

         //all blog post count
         $allBlogPost = Blog::all()->count();

         //all Travel Package count
         $allTravelPackage = travelPackage::all()->count();
         $BeachHolidayTour = travelPackage::where('tour_type', 'Beach Holiday Tour')->count();
         $AdventureTour = travelPackage::where('tour_type', 'Adventure Tour')->count();
         $BusinessTripTour = travelPackage::where('tour_type', 'Business Trip Tour')->count();
         $CulturalTour = travelPackage::where('tour_type', 'Cultural Tour')->count();
 
        // Retrieve logged-in user ID
        $bookings = Booking::withUserAndPackage()
                ->orderBy('created_at', 'DESC')
                ->get();

        $travelPackages = TravelPackage::all();
     
         return view('admin.adminHome', compact('bookings','pendingCountReservation', 'conformCountReservation', 'rejectedCountReservation',
         'pendingCountPayment','conformCountPayment','rejectedCountPayment','allReservation',
        'allBlogPost','allTravelPackage','BeachHolidayTour','AdventureTour','BusinessTripTour','CulturalTour','travelPackages')); // Pass data to the view

    }


}
