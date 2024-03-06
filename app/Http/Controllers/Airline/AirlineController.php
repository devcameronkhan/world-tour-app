<?php

namespace App\Http\Controllers\Airline;

use App\Models\Airline;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAirlineRequest;
use App\Http\Requests\UpdateAirlineRequest;

class AirlineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.airlines.index', ['airlines' => Airline::get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.airlines.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAirlineRequest $request)
    {
        //Get the Validated Data
        $data = $request->validated();

        // Store the Data
        $airline = Airline::create($data);

        //Return the message
        if ($airline) {
            return redirect()->route('airlines.index')->with('success', 'Arline Addedd Successfully!');
        } else {
            return redirect()->route('airlines.index')->with('error', 'Something Went Wrong. Please Try Again!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Airline $airline)
    {
        return view('admin.airlines.edit',['airline'=>$airline]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAirlineRequest $request, Airline $airline)
    {
        // Validated Data
        $data = $request->validated();

        // Update the Airline
        $airline = Airline::where('id',$airline->id)->update($data);

        // Response Message
        if ($airline) {
            return redirect()->route('airlines.index')->with('success', 'Arline Updated Successfully!');
        } else {
            return redirect()->route('airlines.index')->with('error', 'Something Went Wrong. Please Try Again!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Airline $airline)
    {
        if($airline->delete()){
            return redirect()->route('airlines.index')->with('success', 'Arline Deleted Successfully!');
        }else{
            return redirect()->route('airlines.index')->with('error', 'Something Went Wrong. Please Try Again!');
        }
    }
}
