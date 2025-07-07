@extends('layouts.applayout', [
    'role' => 'admin',
    'userName' => auth()->user()->name,
    'showSearch' => true,
    'navItems' => config('navigation.admin')
])

@section('content')
<div class="space-y-6">
    <div class="flex flex-col sm:flex-row justify-between items-center gap-4">
        <h1 class="text-3xl font-bold">Admin Dashboard</h1>
        <a href="{{ route('admin.parcels.create') }}" class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-accent text-accent-foreground hover:bg-accent/90 h-10 px-4 py-2">
            <svg class="mr-2 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
            </svg>
            Add New Parcel
        </a>
    </div>

    <div class="grid gap-4 md:grid-cols-2 lg:grid-cols-3">
        <x-analytics-card 
            title="Total Parcels" 
            value="{{ number_format($totalParcels) }}" 
            icon='<svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>'
            description="+20.1% from last month"
            class="shadow-md"
        />
        <x-analytics-card 
            title="Delivered" 
            value="{{ number_format($deliveredParcels) }}" 
            icon='<svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>'
            description="+15.3% from last month"
            class="shadow-md"
        />
        <x-analytics-card 
            title="In Transit" 
            value="{{ number_format($inTransitParcels) }}" 
            icon='<svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"/></svg>'
            description="+5 since last hour"
            class="shadow-md"
        />
    </div>

    <div class="rounded-lg border bg-card text-card-foreground shadow-md">
        <div class="flex flex-col space-y-1.5 p-6">
            <h2 class="text-2xl font-semibold leading-none tracking-tight">Recent Parcels</h2>
            <p class="text-sm text-muted-foreground">Overview of the latest parcel activities.</p>
        </div>
        <div class="p-6 pt-0">
            <div class="w-full overflow-auto">
                <table class="w-full caption-bottom text-sm">
                    <thead class="[&_tr]:border-b">
                        <tr class="border-b transition-colors hover:bg-muted/50 data-[state=selected]:bg-muted">
                            <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0">Tracking ID</th>
                            <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0">Status</th>
                            <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0">Customer Name</th>
                            <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0">Delivery Date</th>
                            <th class="h-12 px-4 text-right align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="[&_tr:last-child]:border-0">
                        @foreach($recentParcels as $parcel)
                        <tr class="border-b transition-colors hover:bg-muted/50">
                            <td class="p-4 align-middle font-medium">{{ $parcel->tracking_id }}</td>
                            <td class="p-4 align-middle">
                                @php
                                    $badgeClass = [
                                        'Delivered' => 'bg-primary text-primary-foreground',
                                        'In Transit' => 'bg-secondary text-secondary-foreground',
                                        'Out for Delivery' => 'border border-input bg-background hover:bg-accent hover:text-accent-foreground',
                                        'Pending' => 'bg-destructive text-destructive-foreground',
                                    ][$parcel->status] ?? 'border border-input bg-background hover:bg-accent hover:text-accent-foreground';
                                @endphp
                                <span class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 {{ $badgeClass }}">
                                    {{ $parcel->status }}
                                </span>
                            </td>
                            <td class="p-4 align-middle">{{ $parcel->customer_name }}</td>
                            <td class="p-4 align-middle">{{ $parcel->delivery_date->format('Y-m-d') }}</td>
                            <td class="p-4 align-middle text-right">
                                <a href="{{ route('admin.parcels.show', $parcel->id) }}" class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-9 px-3">
                                    View
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection