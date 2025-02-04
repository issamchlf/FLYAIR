<?php

namespace App\Http\Controllers;

use App\Models\airplane;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AirplaneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $airplanes = airplane::all();

        return view('airplane', compact('airplanes'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (Auth::user()->isAdmin=true) {
            return view('airplane.create');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $airplane = airplane::create([
            'name'     => $request->name,
            'type'     => $request->type,
            'max_seats'=> $request->max_seats
        ]);
        $airplane->save();
        return redirect()->route('airplane');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $airplane = airplane::findOrFail($id);
        return view('airplane.show', compact('airplane'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        if (Auth::user()->isAdmin=true) {

            $airplane = airplane::find($id);
            return view('airplane.edit', compact('airplane'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, airplane $id)
    {
        $airplane = airplane::find($id);
        $airplane->update([
            'name'     => $request->name,
            'type'     => $request->type,
            'max_seats'=> $request->max_seats
        ]);
        $airplane->save();
        return redirect()->route('airplane');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(airplane $id)
    {
        if(Auth::user()->isAdmin=true) {

            $airplane = airplane::find($id);

            $airplane->delete();
            return redirect()->route('airplane');
        }
    }
}
