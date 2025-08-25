<x-app-layout>
    <div class="py-10">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Welcome Back" ) }} {{ Auth::user()->name }}
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-white shadow rounded-lg p-6">
                    <h2 class="text-sm font-medium text-gray-600">Total Parcels</h2>
                    <p class="text-2xl font-bold text-blue-600 mt-2">{{ $parcel->status['total_parcels'] ?? 0 }}</p>
                </div>

                <div class="bg-white shadow rounded-lg p-6">
                    <h2 class="text-sm font-medium text-gray-600">Delivered</h2>
                    <p class="text-2xl font-bold text-green-600 mt-2">{{ $parcel->status['delivered'] ?? 0 }}</p>
                </div>

                <div class="bg-white shadow rounded-lg p-6">
                    <h2 class="text-sm font-medium text-gray-600">In Transit</h2>
                    <p class="text-2xl font-bold text-yellow-600 mt-2">{{ $parcel->status['in_transit'] ?? 0 }}</p>
                </div>

                <div class="bg-white shadow rounded-lg p-6">
                    <h2 class="text-sm font-medium text-gray-600">Cancelled</h2>
                    <p class="text-2xl font-bold text-red-600 mt-2">{{ $parcel->status['cancelled'] ?? 0 }}</p>
                </div>
            </div>
            {{-- Revenue & Branch Performance --}}
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                {{-- Revenue Chart --}}
                <div class="bg-white shadow rounded-lg p-6">
                    <h2 class="text-lg font-bold mb-4">💰 Revenue Overview</h2>
                    <canvas id="revenueChart"></canvas>
                </div>

                {{-- Top Branches --}}
                <div class="bg-white shadow rounded-lg p-6">
                    <h2 class="text-lg font-bold mb-4">🏢 Top Branches</h2>
                    <ul>
                        @forelse ($branches as $branch)
                            <li class="flex justify-between py-2 border-b">
                                <span>{{ $branch->name }}</span>
                                <span class="font-semibold">{{ $branch->parcels_count }} Parcels</span>
                            </li>
                        @empty
                            <li>No branch data available</li>
                        @endforelse
                    </ul>
                </div>
            </div>

            {{-- Recent Parcels --}}
            <div class="bg-white shadow rounded-lg p-6">
                <h2 class="text-lg font-bold mb-4">🚚 Recent Parcels</h2>
                <div class="overflow-x-auto">
                    <table class="w-full border-collapse">
                        <thead>
                            <tr class="bg-gray-100 text-left">
                                <th class="p-3">Tracking ID</th>
                                <th class="p-3">Customer</th>
                                <th class="p-3">Status</th>
                                <th class="p-3">Branch</th>
                                <th class="p-3">Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($parcels as $parcel)
                                <tr class="border-b">
                                    <td class="p-3">{{ $parcel->tracking_id }}</td>
                                    <td class="p-3">{{ $parcel->receiver_name }}</td>
                                    <td class="p-3">
                                        <span class="px-2 py-1 text-xs rounded
                                            @if($parcel->status == 'Delivered') bg-green-100 text-green-700
                                            @elseif($parcel->status == 'In Transit') bg-yellow-100 text-yellow-700
                                            @else bg-red-100 text-red-700 @endif">
                                            {{ $parcel->status }}
                                        </span>
                                    </td>
                                    <td class="p-3">{{ $parcel->branch->name ?? '-' }}</td>
                                    <td class="p-3">{{ $parcel->created_at->format('d M Y') }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="p-3 text-center">No recent parcels</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

    @push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('revenueChart').getContext('2d');
        new Chart(ctx, {
            type: 'line',
            data: {
                labels: @json($revenue['labels'] ?? []),
                datasets: [{
                    label: 'Revenue',
                    data: @json($revenue['data'] ?? []),
                    borderColor: '#3b82f6',
                    backgroundColor: 'rgba(59, 130, 246, 0.1)',
                    tension: 0.4,
                    fill: true
                }]
            }
        });
    </script>
    @endpush
        </div>
    </div>
</x-app-layout>
