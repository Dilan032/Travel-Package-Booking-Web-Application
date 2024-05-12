<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // for admin panel navigation
    // public function AdminDashboard(){
    //     return view('admin.adminHome');
    // }

    public function AdminSetting(){
        return view('admin.setting');
    }

    public function AdminManageUser(){
        return view('admin.manageUsers');
    }

    public function AdminBooking(){
        return view('admin.bookingDetails');
    }

    public function AdminMassage(){
        return view('admin.masage');
    }

    public function AdminReview(){
        return view('admin.review');
    }

    public function AdminAddPackage(){
        return view('admin.addtravelPackage');
    }

    public function AdminAddBlog(){
        return view('admin.addTravelPackage');
    }
}
