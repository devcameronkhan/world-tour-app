<?php

namespace App\Http\Controllers\Airport;

use App\Models\Airport;
use App\Enums\Timezones;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAirportRequest;
use App\Http\Requests\UpdateAirportRequest;

class AirportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.airport.index', ['airports' => Airport::get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.airport.create', ['timezones' => Timezones::cases()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAirportRequest $request)
    {
        // Validated Data
        $data = $request->validated();

        // Update the Airline
        $airport = Airport::create($data);

        // Response Message
        if ($airport) {
            return redirect()->route('airports.index')->with('success', 'Airport Added Successfully!');
        } else {
            return redirect()->route('airports.index')->with('error', 'Something Went Wrong. Please Try Again!');
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
    public function edit(Airport $airport)
    {
        return view('admin.airport.edit', ['airport' => $airport,'timezones' => Timezones::cases()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAirportRequest $request, Airport $airport)
    {
        // Get Validated Data
        $data = $request->validated();

        // Update Airport
        $airport = Airport::where('id',$airport->id)->update($data);

        // Response
        if ($airport) {
            return redirect()->route('airports.index')->with('success', 'Airport Updated Successfully!');
        } else {
            return redirect()->route('airports.index')->with('error', 'Something Went Wrong. Please Try Again!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Airport $airport)
    {
        if ($airport->delete()) {
            return redirect()->route('airports.index')->with('success', 'Airport Deleted Successfully!');
        } else {
            return redirect()->route('airports.index')->with('error', 'Something Went Wrong. Please Try Again!');
        }
    }
}
