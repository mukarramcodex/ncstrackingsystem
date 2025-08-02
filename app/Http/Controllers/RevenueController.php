<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Parcel;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RevenueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $totalRevenue = Parcel::sum('price');
        $revenueByBranch = Branch::withsum('parcels', 'price')->get();
        return view('revenue.index', compact('totalRevenue', 'revenueByBranch'));
    }

    public function branchRevenue($id)
    {
        $branch = Branch::findOrFail($id);
        $revenue = $branch->parcels()->sum('price');
        $parcels = $branch->parcels()->get();

        return view('revenue.branch_revenue', compact('branch', 'revenue', 'parcels'));
    }

    public function parcelRevenue()
    {
        $parcels = Parcel::all();
        return view('revenue.parcel_revenue', compact('parcels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function dashboard(Request $request)
    {
        $branchId = $request->input('branch_id');
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');

        $query = DB::table('revenues')
            ->join('parcels', 'revenues.parcel_id', '=', 'parcels.id');

        if ($branchId) {
        $query->where('parcels.branch_id', $branchId);
        }

        if ($startDate && $endDate) {
            $query->whereBetween('revenues.received_on', [$startDate, $endDate]);
        }

        $monthlyRevenue = $query
            ->select(DB::raw("DATE_FORMAT(received_on, '%Y-%m') as month"), DB::aw("SUM(amount) as total_revenue"))
            ->groupBy('month')
            ->orderBy('month')
            ->get();

        $revenueByBranch = $query
        ->join('parcels', 'revenues.parcel_id', '=', 'parcels.id')
        ->join('branches', 'parcels.branch_id', '=', 'branches.id')
        ->select('branches.name as branch_name', DB::raw('SUM(revenues.amount) as total_revenue'))
        ->groupBy('branches.name')
        ->orderByDesc('total_revenue')
        ->get();

        $branches = DB::table('branches')->select('id', 'name')->get();

        // Revenue Summary
        $today = now()->toDateString();
        $month = now()->format('Y-m');
        $year = now()->format('Y');

        $todayRevenue = DB::table('revenues')->whereDate('received_on', $today)->sum('amount');
        $monthRevenue = DB::table('revenues')->where(DB::raw("DATE_FORMAT(received_on, '%Y-%m')"), $month)->sum('amount');
        $yearRevenue = DB::table('revenues')->where(DB::raw("YEAR(received_on)"), $year)->sum('amount');

        return view('revenue.dashboard', compact(
            'monthlyRevenue', 'revenueByBranch', 'branches',
            'branchId', 'startDate', 'endDate',
            'todayRevenue', 'monthRevenue', 'yearRevenue'
        ));
    }

    public function exportPdf()
    {
        $data = [
            'title' => 'Revenue Summary',
            'today' => now()->toDateString(),
            'revenue' => DB::table('revenues')->sum('amount')
        ];

        $pdf = Pdf::loadview('revenue.export', $data);
        return $pdf->download('revenue-report.pdf');
    }
}
