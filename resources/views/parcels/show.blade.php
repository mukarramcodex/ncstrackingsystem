<x-app-layout>
<div class="max-w-2xl mx-auto p-4">
    <h2 class="text-2xl font-bold mb-6">Parcel Details</h2>

    <div class="bg-white shadow rounded-lg p-6 space-y-4">
        <div><strong>Tracking Number:</strong> {{ $parcel->tracking_number }}</div>
        <div><strong>Origin:</strong> {{ $parcel->origin }}</div>
        <div><strong>Destination:</strong> {{ $parcel->destination }}</div>
        <div><strong>Status:</strong> {{ $parcel->status }}</div>
        <div><strong>Created At:</strong> {{ $parcel->created_at->format('d M Y, h:i A') }}</div>
    </div>

    <div class="mt-6 flex space-x-4">
        <a href="{{ route('parcels.edit', $parcel->id) }}" class="bg-yellow-600 text-white px-4 py-2 rounded hover:bg-yellow-700">Edit</a>
        <a href="{{ route('parcels.index') }}" class="bg-gray-600 text-white px-4 py-2 rounded hover:bg-gray-700">Back</a>
    </div>
</div>
</x-app-layout>