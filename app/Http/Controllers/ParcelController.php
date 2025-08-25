<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parcel;
use Barryvdh\DomPDF\Facade\Pdf;
use Picqer\Barcode\BarcodeGeneratorSVG;

class ParcelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $parcels = Parcel::latest()->paginate(10);
        $parcels = Parcel::with('bookingOfficer')->get();
        return view('parcels.index', compact('parcels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $lastReceipt = Parcel::orderBy('id', 'desc')->value('receipt_number');
        $nextReceipt = $lastReceipt ? (int)$lastReceipt + 1 : 10000;
        return view('parcels.create', [
            'nextReceipt' => str_pad($nextReceipt, 4, '0', STR_PAD_LEFT),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'sender_name' => 'required',
            'sender_phone' => 'required',
            'sender_email' => 'required|email',
            'sender_cnic' => 'required',
            'receiver_phone' => 'required',
            'receiver_name' => 'required',
            'receiver_email' => 'required|email',
            'receiver_cnic' => 'required',
            'tracking_number' => 'required|unique:parcels',
            'booking_time' => 'required',
            'payment_status' => 'required',
            'status' => 'required',
            'origin' => 'required',
            'destination' => 'required',
            'booking_point' => 'required',
            'delivery_point' => 'required',
            'packing_type' => 'required',
            'dimension' => 'required',
            'pieces' => 'required',
            'goods_description' => 'required',
            'remarks' => 'required',
            'notes' => 'required',
            'weight' => 'required',
            'fare' => 'required',
            'amount' => 'required',
            'total_amount' => 'required',
            'receipt_number' => 'required|unique:parcels',
            'booking_id' => 'required|unique:parcels',
            'booking_officer' => 'required',
        ]);
        $parcel = Parcel::create($validated);
        return redirect()->route('parcel.download', $parcel->tracking_number);
        // return redirect()->route('parcels.index')->with('success', 'Parcel created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Parcel $parcel)
    {
        return view('parcels.show', compact('parcel'));
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
            'origin' => 'required',
            'destination' => 'required',
            'status' => 'required',
            'payment_status' => 'required',
            'sender_name' => 'required',
            'sender_phone' => 'required',
            'sender_email' => 'required|email',
            'receiver_name' => 'required',
            'receiver_phone' => 'required',
            'receiver_email' => 'required|email',
        ]);
        $parcel->update($validated);

        return redirect()->route('parcels.index')->with('success', 'Parcel Updated.');
    }

    public function downloadByTrackingNumber($tracking_number)
    {
        $parcel = Parcel::where('tracking_number', $tracking_number)
                ->with('bookingOfficer')
                ->firstOrFail();

        $generator = new BarcodeGeneratorSVG();
        $barcode = base64_encode($generator->getBarcode($tracking_number, BarcodeGeneratorSVG::TYPE_CODE_128));
        $pdf = Pdf::loadView('pdf.parcels', compact('parcel', 'barcode'));
        $filename ='Parcel_' . $parcel->tracking_number . '.pdf';
        // return $pdf->download($filename);
        return $pdf->download($filename);
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
