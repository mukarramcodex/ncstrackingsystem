<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Super Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm sm:rounded-lg">
                <div class="space-y-6">
                    <div class=" grid gap-4 md:grid-cols-2 lg:grid-cols-4">
                        <x-analytics-card
                            title="Total Parcels"
                            value="{{ number_format($totalParcels) }}"
                            icon='<svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>'
                            description="+20.1% from last month"
                            class="shadow-md bg-white"
                        />
                        <x-analytics-card
                            title="In Transit"
                            value="{{ number_format($inTransitParcels) }}"
                            icon='<svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"/></svg>'
                            description="+5 since last hour"
                            class="shadow-md bg-white"
                        />
                        <x-analytics-card
                            title="Delivered"
                            value="{{ number_format($deliveredParcels) }}"
                            icon='<svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>'
                            description="+15.3% from last month"
                            class="shadow-md bg-white"
                        />
                        <x-analytics-card
                            title="Total Branches"
                            value="{{ number_format(4) }}"
                            icon='<svg class="h-5 w-5" viewBox="0 0 15 15" version="1.1" id="warehouse" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.5,5c-0.0762,0.0003-0.1514-0.0168-0.22-0.05L7.5,2L1.72,4.93C1.4632,5.0515,1.1565,4.9418,1.035,4.685&#xA;&#x9;S1.0232,4.1215,1.28,4L7.5,0.92L13.72,4c0.2761,0.0608,0.4508,0.3339,0.39,0.61C14.0492,4.8861,13.7761,5.0608,13.5,5z M5,10H2v3h3&#xA;&#x9;V10z M9,10H6v3h3V10z M13,10h-3v3h3V10z M11,6H8v3h3V6z M7,6H4v3h3V6z"/>
                                </svg>'
                            description="in all over Pakistan"
                            class="shadow-md bg-white"
                        />
                    </div>
                    <div class=" grid gap-4 md:grid-cols-2 lg:grid-cols-4">
                        <x-analytics-card
                            title="Total Icome"
                            value="{{ number_format($totalParcels) }}"
                            icon='<svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>'
                            description="+20.1% from last month"
                            class="shadow-md bg-white"
                        />
                        <x-analytics-card
                            title="Pending Income"
                            value="{{ number_format($inTransitParcels) }}"
                            icon='<svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"/></svg>'
                            description="+5 since last hour"
                            class="shadow-md bg-white"
                        />
                        <x-analytics-card
                            title="Delivered"
                            value="{{ number_format($deliveredParcels) }}"
                            icon='<svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>'
                            description="+15.3% from last month"
                            class="shadow-md bg-white"
                        />
                        <x-analytics-card
                            title="Total Branches"
                            value="{{ number_format(4) }}"
                            icon='<svg class="h-5 w-5" viewBox="0 0 15 15" version="1.1" id="warehouse" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.5,5c-0.0762,0.0003-0.1514-0.0168-0.22-0.05L7.5,2L1.72,4.93C1.4632,5.0515,1.1565,4.9418,1.035,4.685&#xA;&#x9;S1.0232,4.1215,1.28,4L7.5,0.92L13.72,4c0.2761,0.0608,0.4508,0.3339,0.39,0.61C14.0492,4.8861,13.7761,5.0608,13.5,5z M5,10H2v3h3&#xA;&#x9;V10z M9,10H6v3h3V10z M13,10h-3v3h3V10z M11,6H8v3h3V6z M7,6H4v3h3V6z"/>
                                </svg>'
                            description="in all over Pakistan"
                            class="shadow-md bg-white"
                        />
                    </div>
                    <div class=" grid gap-4 md:grid-cols-2 lg:grid-cols-3">
                        <x-financial-statement-card
                            title="Delivery Man Statements"
                            income=""
                            expense=""
                            balance=""
                            currency=""
                        />
                        <x-financial-statement-card
                            title="Branch Statements"
                            income=""
                            expense=""
                            balance=""
                            currency=""
                        />
                        <x-financial-statement-card
                            title="Merchant Statements"
                            income=""
                            expense=""
                            balance=""
                            currency=""
                        />

                    </div>
                    <div class="bg-white rounded-lg border bg-card text-card-foreground shadow-md">
                        <div class="flex justify-between items-center ">
                            <div class="flex flex-col space-y-1.5 p-6">
                                <h2 class="text-2xl font-semibold leading-none tracking-tight">Recent Parcels</h2>
                                <p class="text-sm text-muted-foreground">Overview of the latest parcel activities.</p>
                            </div>
                            <div class="p-3 items-start gap-4">
                                <a href="{{ route('parcels.index') }}" class="bg-blue-800 hover:bg-blue-500 rounded text-white p-2">See All Parcels</a>
                                <a href="{{ route('parcels.create') }}" class="bg-blue-800 hover:bg-blue-500 rounded text-white p-2">Create a New Parcel</a>
                            </div>
                        </div>
                        <div class="p-6 pt-0">
                            <div class="w-full overflow-auto">
                                <table class="w-full caption-bottom text-sm">
                                    <thead class="[&_tr]:border-b">
                                        <tr class="border-b transition-colors hover:bg-muted/50 data-[state=selected]:bg-muted">
                                            <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0">Tracking Number</th>
                                            <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0">Status</th>
                                            <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0">Sender Name</th>
                                            <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0">Receiver Name</th>
                                            <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0">Delivery Date</th>
                                            <th class="h-12 px-4 text-right align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="[&_tr:last-child]:border-0">
                                        @foreach($recentParcels as $parcel)
                                        <tr class="border-b transition-colors hover:bg-muted/50">
                                            <td class="p-4 align-middle font-medium">{{ $parcel->tracking_number }}</td>
                                            <td class="p-4 align-middle">
                                                @php
                                                    $badgeClass = [
                                                        'Delivered' => 'bg-green-300 text-primary-foreground',
                                                        'In Transit' => 'bg-yellow-300 text-secondary-foreground',
                                                        'Out for Delivery' => 'border border-input bg-green-600 hover:bg-accent hover:text-accent-foreground',
                                                        'Pending' => 'bg-blue-300 text-destructive-foreground',
                                                    ][$parcel->status] ?? 'border border-input bg-background hover:bg-accent hover:text-accent-foreground';
                                                @endphp
                                                <span class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 {{ $badgeClass }}">
                                                    {{ $parcel->status }}
                                                </span>
                                            </td>
                                            <td class="p-4 align-middle">{{ $parcel->sender_name }}</td>
                                            <td class="p-4 align-middle">{{ $parcel->receiver_name }}</td>
                                            <td class="p-4 align-middle">{{ $parcel->booking_time->format('d-m-Y H:i:s') }}</td>
                                            <td class="p-4 align-middle text-right">
                                                <a href="{{ route('parcels.show', $parcel->booking_id) }}" class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-9 px-3">
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
            </div>
        </div>
    </div>
</x-app-layout>
