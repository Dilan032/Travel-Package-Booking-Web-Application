<?php

namespace App\Http\Controllers;

use App\Models\booking;
use App\Models\ServiceForTravelPackage;
use App\Models\travelPackage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

class TravelPackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('components.admin-components.travelPackage.add-travel-package-model');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules =[
            'package_name' => 'required|string|max:255',
            'image_1' => 'nullable|image|mimes:jpeg,svg,png,jpg,gif,webp|max:10240', // Ensure image file, max 10MB
            'image_2' => 'nullable|image|mimes:jpeg,svg,png,jpg,gif,webp|max:10240', // Ensure image file, max 10MB
            'image_3' => 'nullable|image|mimes:jpeg,svg,png,jpg,gif,webp|max:10240', // Ensure image file, max 10MB
            'duration' => 'required|string|max:255',
            'tour_type' => 'required|in:Adventure Tour,Beach Holiday Tour,Cultural Tour,Business Trip Tour, Wildlife Safaris',
            'price_start_from' => 'required|numeric|min:0',
            'overview' => 'required|string',
            'included_things' => 'required|string',
            'tour_plane_description' => 'required|string',
            'per_adult_fee' => 'required|numeric|min:0',
            'per_child_fee' => 'required|numeric|min:0',
        ];

        $validator = Validator::make($request->all(),  $rules);
        //to show massages | check validate
        if ($validator->fails()) {
            return redirect()->route('admin.travelPackage.show')->withErrors($validator)->withInput();
        }

        //to store data code here
        // 1. connect with the model
        $travelPackage = new travelPackage();

        //set the attribute
        $travelPackage->package_name = $request->package_name;
        $travelPackage->duration = $request->duration;
        $travelPackage->tour_type = $request->tour_type;
        $travelPackage->price_start_from = $request->price_start_from;
        $travelPackage->overview = $request->overview;
        $travelPackage->included_things = $request->included_things;
        $travelPackage->tour_plane_description = $request->tour_plane_description;
        $travelPackage->per_adult_fee = $request->per_adult_fee;
        $travelPackage->per_child_fee = $request->per_child_fee;
        $travelPackage->save();

        //set the attribute for images
        //for image 1
        if ($request->hasFile('image_1')) {

                
            $image_1 = $request->file('image_1');
            $ext = $image_1->getClientOriginalExtension();
            $imageName = time() . uniqid('_img1_', true) . '.' . $ext;
            $image_1->move(public_path('image/uploads/travelPackage'), $imageName);
            $travelPackage->image_1 = $imageName;
            $travelPackage->save();
        }
         //for image 2
         if ($request->hasFile('image_2')) {

                
            $image_2 = $request->file('image_2');
            $ext = $image_2->getClientOriginalExtension();
            $imageName = time() . uniqid('_img2_', true) . '.' . $ext;
            $image_2->move(public_path('image/uploads/travelPackage'), $imageName);
            $travelPackage->image_2 = $imageName;
            $travelPackage->save();
        }
         //for image 3
         if ($request->hasFile('image_3')) {

                
            $image_3 = $request->file('image_3');
            $ext = $image_3->getClientOriginalExtension();
            $imageName = time() . uniqid('_img3_', true) . '.' . $ext;
            $image_3->move(public_path('image/uploads/travelPackage'), $imageName);
            $travelPackage->image_3 = $imageName;
            $travelPackage->save();
        }
        

        // Process the validated data, such as saving it to the database
        return redirect()->route('admin.travelPackage.show')->with('success', 'Travel Package created successfully');
        
    }

    /**
     * Display the travel Packages
     */
    public function showForAdmin(travelPackage $travelPackage)
    {
        $travelPackage = travelPackage::orderBy('created_at','DESC')->get();
        return view('admin.addTravelPackage', compact('travelPackage')); // Pass data to the view
    }

    public function showForUser(travelPackage $travelPackage)
    {
        $travelPackage = travelPackage::orderBy('created_at','DESC')->get();
        return view('user.package', compact('travelPackage')); // Pass data to the view
    }

    // for user travel package page
    public function showTravelPackagePage($id){
        $travelPackage = travelPackage::findOrFail($id);
        return view('user.packagePage',[ 'travelPackage' => $travelPackage
        
    ]);
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $travelPackage = travelPackage::findOrFail($id);
        return view('admin.editTravelPackage',[
            'travelPackage' => $travelPackage
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, Request $request)
    {
        $travelPackage = travelPackage::findOrFail($id);

        $rules =[
            'package_name' => 'required|string|max:255',
            'image_1' => 'nullable|image|mimes:jpeg,svg,png,jpg,gif,webp|max:10240', // Ensure image file, max 10MB
            'image_2' => 'nullable|image|mimes:jpeg,svg,png,jpg,gif,webp|max:10240', // Ensure image file, max 10MB
            'image_3' => 'nullable|image|mimes:jpeg,svg,png,jpg,gif,webp|max:10240', // Ensure image file, max 10MB
            'duration' => 'required|string|max:255',
            'tour_type' => 'required|in:Adventure Tour,Beach Holiday Tour,Cultural Tour,Business Trip Tour, Wildlife Safaris',
            'price_start_from' => 'required|numeric|min:0',
            'overview' => 'required|string',
            'included_things' => 'required|string',
            'tour_plane_description' => 'required|string',
            'per_adult_fee' => 'required|numeric|min:0',
            'per_child_fee' => 'required|numeric|min:0',
        ];

        $validator = Validator::make($request->all(),  $rules);
        //to show massages | check validate
        if ($validator->fails()) {
            return redirect()->route('admin.travelPackage.show', $travelPackage->id)->withErrors($validator)->withInput();
        }

        //to store data code here

        //set the attribute
        $travelPackage->package_name = $request->package_name;
        $travelPackage->duration = $request->duration;
        $travelPackage->tour_type = $request->tour_type;
        $travelPackage->price_start_from = $request->price_start_from;
        $travelPackage->overview = $request->overview;
        $travelPackage->included_things = $request->included_things;
        $travelPackage->tour_plane_description = $request->tour_plane_description;
        $travelPackage->per_adult_fee = $request->per_adult_fee;
        $travelPackage->per_child_fee = $request->per_child_fee;
        $travelPackage->save();


        
        //set the attribute for images
        //for image 1
        if ($request->hasFile('image_1')) {

            //delete old image
            $imagePath = public_path('upload/travelPackage/'.$travelPackage->image_1);
            //check image is it defalt or not
            if($travelPackage->image_1 !== 'empty-image.png' && File::exists( $imagePath)){
                File::delete( $imagePath );
            }
                
            $image_1 = $request->file('image_1');
            $ext = $image_1->getClientOriginalExtension();
            $imageName = time() . uniqid('_img1_', true) . '.' . $ext;
            $image_1->move(public_path('image/uploads/travelPackage'), $imageName);
            $travelPackage->image_1 = $imageName;
            $travelPackage->save();
        }


        //for image 2
        if ($request->hasFile('image_2')) {

            //delete old image
            $imagePath = public_path('upload/travelPackage/'.$travelPackage->image_2);
            //check image is it defalt or not
            if($travelPackage->image_2 !== 'empty-image.png' && File::exists( $imagePath)){
                File::delete( $imagePath );
            }

            $image_2 = $request->file('image_2');
            $ext = $image_2->getClientOriginalExtension();
            $imageName = time() . uniqid('_img2_', true) . '.' . $ext;
            $image_2->move(public_path('image/uploads/travelPackage'), $imageName);
            $travelPackage->image_2 = $imageName;
            $travelPackage->save();
        }
        //for image 3
        if ($request->hasFile('image_3')) {

            //delete old image
            $imagePath = public_path('upload/travelPackage/'.$travelPackage->image_3);
            //check image is it defalt or not
            if($travelPackage->image_3 !== 'empty-image.png' && File::exists( $imagePath)){
                File::delete( $imagePath );
            }

            $image_3 = $request->file('image_3');
            $ext = $image_3->getClientOriginalExtension();
            $imageName = time() . uniqid('_img3_', true) . '.' . $ext;
            $image_3->move(public_path('image/uploads/travelPackage'), $imageName);
            $travelPackage->image_3 = $imageName;
            $travelPackage->save();
        }

        // Process the validated data, such as saving it to the database
        return redirect()->route('admin.travelPackage.show')->with('success', 'Travel Package Updated successfully');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //start booking delete ( delete relationShip)
        $bookings = booking::where('package_id', $id)->get();
        foreach ($bookings as $booking) {
        $booking->delete();
    }

        //start travel package delete
        $travelPackage = travelPackage::findOrFail($id);

        //delete image 1
        $imagePath = public_path('upload/blog/'.$travelPackage->image_1);
        //check image is it defalt or not and delete
        if($travelPackage->image_1 !== 'empty-image.png' && File::exists( $imagePath)){
            File::delete( $imagePath );
        }
        //delete image 2
        $imagePath = public_path('upload/blog/'.$travelPackage->image_2);
        //check image is it defalt or not and delete
        if($travelPackage->image_2 !== 'empty-image.png' && File::exists( $imagePath)){
            File::delete( $imagePath );
        }
        //delete image 3
        $imagePath = public_path('upload/blog/'.$travelPackage->image_3);
        //check image is it defalt or not and delete
        if($travelPackage->image_3 !== 'empty-image.png' && File::exists( $imagePath)){
            File::delete( $imagePath );
        }

        //delete bolg post from database
        $travelPackage->delete();

        return redirect()->route('admin.travelPackage.show')->with('success', 'Travel Package Delete successfully');
    }
}
