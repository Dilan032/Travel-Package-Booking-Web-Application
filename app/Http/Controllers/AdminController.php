<?php

namespace App\Http\Controllers;

use App\Models\booking;
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
    

}
