<?php

namespace App\Http\Controllers;

use App\Models\userMassage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserMassageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('user.contactUs');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        {
            $rules = [
                'user_name' => 'required|string', 
                'email' => 'required|email', 
                'subject' => 'required|string', 
                'discription' => 'nullable|string', 
            ];
    
            $validator = Validator::make($request->all(),  $rules);
            //to show massages | check validate
            if ($validator->fails()) {
                return redirect()->route('contactUs')->withErrors($validator)->withInput();
            }
    
            //to store data code here
            // 1. connect with the model
            $user_massages = new userMassage();
    
            //set the attribute
            $user_massages->user_name = $request->user_name;
            $user_massages->email = $request->email;
            $user_massages->subject = $request->subject;
            $user_massages->discription = $request->discription;
            $user_massages->save();
            
            // Process the validated data, such as saving it to the database
            return redirect()->route('contactUs')->with('success', 'Massage successfully Send');
            
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(userMassage $userMassage)
    {
        $user_massages = userMassage::orderBy('created_at','DESC')->get();
        return view('admin.masage', compact('user_massages')); // Pass data to the view
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $userMassage = userMassage::findOrFail($id);
        $userMassage->delete();

        return redirect()->route('admin.massage')->with('success', 'Massage Delete');
    }
}
