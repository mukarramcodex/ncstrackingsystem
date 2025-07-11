<x-app-layout>
<div class="max-w-xl mx-auto p-4">
    <h2 class="text-2xl font-bold mb-6">Create Parcel</h2>

    <form method="POST" action="{{ route('parcels.store') }}" class="space-y-4">
        @csrf
        {{-- Validation Error Messages --}}
        @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div>
            <label class="block font-medium">Tracking Number</label>
            <input type="text" name="tracking_number" class="w-full border rounded p-2" required>
        </div>

        <div>
            <label class="block font-medium">Origin</label>
            <input type="text" name="origin" class="w-full border rounded p-2" required>
        </div>

        <div>
            <label class="block font-medium">Destination</label>
            <input type="text" name="destination" class="w-full border rounded p-2" required>
        </div>

        <div>
            <label class="block font-medium">Status</label>
            <select name="status" class="w-full border rounded p-2">
                <option value="Pending">Pending</option>
                <option value="In Transit">In Transit</option>
                <option value="Delivered">Delivered</option>
            </select>
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Create</button>
    </form>
</div>
</x-app-layout>