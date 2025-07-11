<x-app-layout>
        <div class="max-w-6xl mx-auto p-4">
            <h1 class="text-2xl font-bold mb-6">
                All Parcels
            </h1>
            
            <a href="{{ route('parcels.create') }}" class="mb-4 inline-block px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Create Parcels</a>
            <a href="{{ route('parcels.form') }}" class="mb-4 inline-block px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Create Shipment</a>
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
                            <td class="px-4 py-2">{{ $parcel->status }}</td>
                            <td class="px-4 py-2 flex space-x-2 justify-center">
                                <a href="{{ route('parcels.show', $parcel->id) }}" class="text-blue-600 hover:underline">View</a>
                                <a href="{{ route('parcels.edit', $parcel->id) }}" class="text-yellow-600 hover:underline">Edit</a>
                                <form action="{{ route('parcels.destroy', $parcel->id) }}" method="POST" onsubmit="return confirm('Are you sure?')" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button class="text-red-600 hover:underline" type="submit">Delete</button>
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