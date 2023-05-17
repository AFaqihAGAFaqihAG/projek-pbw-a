<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LaptopInformation;
use Illuminate\Support\Facades\DB;

class LaptopInformationController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $file = $request->file('image_path') ;
        $fileName = $file->getClientOriginalName() ;
        $destinationPath = public_path().'/images' ;
        $file->move($destinationPath,$fileName);

        $data = $request->except('_token');
        $data['image_path'] = $fileName;
        LaptopInformation::create($data);

        return view('editdata');

        // dd($request->all());
    }

    public function details(Request $request, $item)
    {
        // Assuming you have a LaptopInformation model representing your laptops
        $laptop = LaptopInformation::where('id', $item)->first();
        
        if (!$laptop) {
            // Handle the case where the laptop is not found
            return abort(404);
        }
    
        // Return the view with the laptop details
        return view('laptopdetail', ['laptop' => $laptop]);
    }    

    public function indexLandingPage() {
        $laptopList = LaptopInformation::all();
        return view('landingpage', compact(['laptopList']));
    }

    public function indexEditData() {
        $laptopList = LaptopInformation::all();
        return view('editdata', compact(['laptopList']));
    }

}
