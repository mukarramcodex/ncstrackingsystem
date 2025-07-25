<x-app-layout>
        <div class="max-w-6xl mx-auto p-4">
            <h1 class="text-2xl font-bold mb-6">
                All Parcels
            </h1>

            <a href="{{ route('parcels.create') }}" class="mb-4 inline-block px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Create Parcels</a>
            <div class="bg-white shadow rounded-lg overflow-hidden">
                <table class="min-w-full table-auto">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 py-2 text-left">Tracking #</th>
                        <th class="px-4 py-2 text-left">Origin</th>
                        <th class="px-4 py-2 text-left">Destination</th>
                        <th class="px-4 py-2 text-left">Status</th>
                        <th class="px-4 py-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($parcels as $parcel)
                        <tr class="border-t">
                            <td class="px-4 py-2">{{ $parcel->tracking_number }}</td>
                            <td class="px-4 py-2">{{ $parcel->origin }}</td>
                            <td class="px-4 py-2">{{ $parcel->destination }}</td>
                            <td class="px-4 py-2">
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
                            <td class="px-4 py-2 flex space-x-2 justify-center">
                                <a href="{{ route('parcels.show', $parcel->receipt_number) }}" class="text-white hover:bg-blue-900 bg-blue-600 rounded-lg py-1 px-3 ">View</a>
                                <a href="{{ route('parcels.edit', $parcel->receipt_number) }}" class="text-white bg-yellow-600 hover:bg-yellow-900 rounded-lg py-1 px-3">Edit</a>
                                <form action="{{ route('parcels.destroy', $parcel->id) }}" method="POST" onsubmit="return confirm('Are you sure?')" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button class="text-white bg-red-600 hover:bg-red-900 rounded-lg py-1 px-3" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="px-4 py-4 text-center text-gray-500">No parcels found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
</x-app-layout>
