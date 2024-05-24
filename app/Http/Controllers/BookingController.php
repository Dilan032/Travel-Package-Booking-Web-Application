<?php

namespace App\Http\Controllers;

use App\Models\booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class BookingController extends Controller
{

    public function showLoginView()
    {
        
        return view('auth.login'); 
        
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userId = Auth::id(); // Retrieve logged-in user ID
        $bookings = Booking::where('user_id', $userId)
            ->orderBy('created_at', 'DESC')
            ->get();
    
        return view('profile.booking', compact('bookings')); // Pass data to the view
        
    }
        /**
     * Display a invoice massage.
     */
    public function indexInvoice()
    {
        return view('profile.invoice');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules =[
           
            'date' => 'required|date',
            'number_of_adult' => 'required|integer',
            'number_of_child' => 'required|integer',
            'aditional_requarement' => 'nullable|string',
            'total_fee' => 'required|numeric',

        ];

        $validator = Validator::make($request->all(),  $rules);
        //to show massages | check validate
        if ($validator->fails()) {
            return redirect()->route('user.packagePage')->withErrors($validator)->withInput();
        }

        //to store data code here
        // 1. connect with the model
        $bookings = new booking();

        $userId = Auth::id(); // Retrieve logged-in user ID

        //set the attribute
        $bookings->user_id = $userId;
       
        $bookings-> package_name = $request->package_name;

        $bookings->date = $request->date;
        $bookings->number_of_adult = $request->number_of_adult;
        $bookings->number_of_child = $request->number_of_child;
        $bookings->aditional_requarement = $request->aditional_requarement;
        $bookings->total_fee = $request->total_fee;
        $bookings->save();
        
        // Process the validated data, such as saving it to the database
        return redirect()->route('profile.Booking')->with('success', 'Travel Package Booking successfully');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(booking $booking)
    {
        // $bookings = booking::orderBy('created_at','DESC')->get();
        // return view('profile.booking', compact('bookings')); // Pass data to the view
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(booking $booking)
    {
        //
    }
}
