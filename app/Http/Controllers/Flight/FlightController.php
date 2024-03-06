<?php

namespace App\Http\Controllers\Flight;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFlightRequest;
use App\Http\Requests\UpdateFlightRequest;
use App\Models\Airline;
use App\Models\Airport;
use App\Models\Flight;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.flights.index', [
            'flights' => Flight::with(['departure_airport', 'arrival_airport', 'airline'])->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.flights.create', [
            'airlines' => Airline::get(),
            'airports' => Airport::get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFlightRequest $request)
    {
        // Get The Validated Data
        $data = $request->validated();

        // Create The Flight -- Flight Number Automatically Generated From The Flight Model
        $flight = Flight::create($data);

        // Response
        if ($flight) {
            return redirect()->route('flights.index')->with('success', 'Flight Created Successfully');
        } else {
            return redirect()->route('flights.index')->with('error', 'Something Went Wrong. Please Try Again');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Flight $flight)
    {
        return view('admin.flights.edit', [
            'flight' => $flight,
            'airlines' => Airline::get(),
            'airports' => Airport::get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFlightRequest $request, Flight $flight)
    {
        // Get the Validated Data
        $data = $request->validated();

        // Update Response
        if ($flight->update($data)) {
            return redirect()->route('flights.index')->with('success', 'Flight Updated Successfully');
        } else {
            return redirect()->route('flights.index')->with('error', 'Something Went Wrong. Please Try Again');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Flight $flight)
    {
        if ($flight->delete()) {
            return redirect()->route('flights.index')->with('success', 'Flight Deleted Successfully');
        } else {
            return redirect()->route('flights.index')->with('error', 'Something Went Wrong. Please Try Again');
        }
    }
}
