<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class FlightController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Flight::query();
    
        // Apply filters if present
        if ($request->has('max_price') && $request->max_price != '') {
            $query->where('price', '<=', $request->max_price);
        }
    
        if ($request->has('departure_time') && $request->departure_time != '') {
            switch ($request->departure_time) {
                case 'morning':
                    $query->whereTime('departure_time', '>=', '06:00:00')
                          ->whereTime('departure_time', '<', '12:00:00');
                    break;
                case 'afternoon':
                    $query->whereTime('departure_time', '>=', '12:00:00')
                          ->whereTime('departure_time', '<', '18:00:00');
                    break;
                case 'evening':
                    $query->whereTime('departure_time', '>=', '18:00:00')
                          ->whereTime('departure_time', '<', '24:00:00');
                    break;
            }
        }
    
        if ($request->has('departure_airport') && $request->departure_airport != '') {
            $query->where('departure_airport', $request->departure_airport);
        }
    
        // Get filtered flights
        $flights = $query->get();
    
        return view('flight', compact('flights'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (Auth::user()->isAdmin=true) {

            return view('flight.create');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $flight = flight::create([
            'airplane_id'      => $request->airplane_id,
            'flight_number'    => $request->flight_number,    
            'departure_airport' => $request->departure_airport,
            'arrival_airport'  => $request->arrival_airport,
            'departure_time'   => $request->departure_time,
            'arrival_time'     => $request->arrival_time,
            'price'            => $request->price,
            'available_seats'  => $request->available_seats,
            'status'           => $request->status

        ]);
        $flight->save();
        return redirect()->route('flight');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, string $id)
    {
        $flight = flight::findOrFail($id);
        $booked = count($flight->users()->where('user_id', Auth::id())->get());

        if ($request->action === 'book' && !$booked)
        {
            $this->book($flight, Auth::id());
            return (Redirect::to(route('flight.show', $flight->id)));

        }
        if ($request->action === 'debook' && $booked)
        {
            $this->debook($flight, Auth::id());
            return (Redirect::to(route('flight.show', $flight->id)));
        }
        return view('flight.show', compact('flight', 'booked'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(flight $id)
    {
        if(Auth::user()->isAdmin=true) {

            $flight = flight::find($id);
            return view('flight.edit', compact('flight'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, flight $id)
    {
        $flight = flight::find($id);
        $flight->update([
            'airplane_id'      => $request->airplane_id,
            'flight_number'    => $request->flight_number,    
            'departure_airport' => $request->departure_airport,
            'arrival_airport'  => $request->arrival_airport,
            'departure_time'   => $request->departure_time,
            'arrival_time'     => $request->arrival_time,
            'price'            => $request->price,
            'available_seats'  => $request->available_seats,
            'status'           => $request->status
        ]);

        $flight->save();
        return redirect()->route('flight');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(flight $id)
    {
        if(Auth::user()->isAdmin=true) {

            $flight = flight::find($id);

            $flight->delete();
            return redirect()->route('flight');
        }
    }
    public function book($flight, $userId)
    {
        $flight->users()->attach($userId);
    }

    public function debook($flight, $userId)
    {
        $flight->users()->detach($userId);
    }

}
