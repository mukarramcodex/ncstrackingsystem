<?php

namespace App\Http\Controllers;

use App\Models\Parcel;
use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    public function index()
    {
        //
    }

    public function show()
    {
        $totalParcels = Parcel::count();
        $deliveredParcels = Parcel::where('status', 'Delivered')->count();
        $inTransitParcels = Parcel::where('status', 'In Transit')->count();
        $recentParcels = Parcel::latest()->paginate(10);

        return view('SuperAdmin.dashboard', [
            'totalParcels' => $totalParcels,
            'deliveredParcels' => $deliveredParcels,
            'inTransitParcels' => $inTransitParcels,
            'recentParcels' => $recentParcels,
        ]);
    }

    public function store()
    {
        //
    }
}
