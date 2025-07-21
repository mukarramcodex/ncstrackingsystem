<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parcel;

class ParcelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $parcels = Parcel::latest()->paginate(10);
        return view('parcels.index', compact('parcels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('parcels.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'booking_id' => 'required|unique:parcels',
            'receipt_number' => 'required|unique:parcels',
            'tracking_number' => 'required|unique:parcels',
            'origin' => 'required',
            'destination' => 'required',
            'status' => 'required',
            'booking_officer' => 'required',
        ]);
        Parcel::create($validated);
        return redirect()->route('parcels.index')->with('success', 'Parcel created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Parcel $parcel)
    {
        return view('parcels.show', compact('parcels'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Parcel $parcel)
    {
        return view('parcels.edit', compact('parcels'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Parcel $parcel)
    {
        $validated = $request->validate([
            'receiver_email' => 'required',
            'orgin' => 'required',
            'status' => 'required',
            'destination' => 'required',
            'customer_name' => 'required',
        ]);
        $parcel->update($validated);

        return redirect()->route('parcels.index')->with('success', 'Parcel Updated.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function form(Request $request, string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function dialog(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Parcel $parcel)
    {
        $parcel->delete();
        return redirect()->route('parcels.index')->with('success', 'Parcel Deleted.');
    }
}
