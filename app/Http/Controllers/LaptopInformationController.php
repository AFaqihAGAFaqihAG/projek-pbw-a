<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LaptopInformation;

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
        // Validate input data
        $validatedData = $request->validate([
            'brand' => 'required|string|max:30',
            'model' => 'required|string|max:100',
            'price' => 'required|integer',
            'processor' => 'required|string|max:100',
            'ram' => 'required|string|max:50',
            'storage' => 'required|string|max:50',
            'display_size' => 'required|string|max:50',
            'port' => 'required|string|max:50',
            'operating_system' => 'required|string|max:50',
            'weight' => 'required|integer',
            'description' => 'nullable|string',
        ]);


        // Create new LaptopInformation instance and save to database
        $laptop = new LaptopInformation;
        $laptop->brand = $validatedData['brand'];
        $laptop->model = $validatedData['model'];
        $laptop->price = $validatedData['price'];
        $laptop->processor = $validatedData['processor'];
        $laptop->ram = $validatedData['ram'];
        $laptop->storage = $validatedData['storage'];
        $laptop->display_size = $validatedData['display_size'];
        $laptop->port = $validatedData['port'];
        $laptop->operating_system = $validatedData['operating_system'];
        $laptop->weight = $validatedData['weight'];
        $laptop->description = $validatedData['description'];
        $laptop->save();

        return redirect()->route('addnewdata');
    }

    public function index() {
        $laptopList = LaptopInformation::all();
        return view('LandingPage', compact(['laptopList']));
    }

}
