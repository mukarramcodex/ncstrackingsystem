<x-app-layout>
<div class="max-w-4xl mx-auto p-4">
    <h2 class="text-2xl font-bold mb-6">Create Parcel</h2>

    <form method="POST" action="{{ route('parcels.store') }}" class="space-y-6">
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

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            {{-- Sender Information Column --}}
            <div class="bg-white p-4 rounded-lg shadow">
                <h3 class="text-lg font-semibold mb-4 border-b pb-2">Sender Information</h3>

                <div class="space-y-4">
                    <div>
                        <label class="block font-medium text-gray-700">Sender Name</label>
                        <input type="text" name="customer_name" class="w-full border rounded p-2 mt-1" required>
                    </div>

                    <div>
                        <label class="block font-medium text-gray-700">Sender Address</label>
                        <textarea name="origin" rows="3" class="w-full border rounded p-2 mt-1" required></textarea>
                    </div>

                    <div>
                        <label class="block font-medium text-gray-700">Sender Email</label>
                        <input type="email" name="sender_email" class="w-full border rounded p-2 mt-1" required>
                    </div>

                    <div>
                        <label class="block font-medium text-gray-700">Sender Phone Number</label>
                        <input type="tel" name="sender_phone" class="w-full border rounded p-2 mt-1" required>
                    </div>
                </div>
            </div>

            {{-- Receiver Information Column --}}
            <div class="bg-white p-4 rounded-lg shadow">
                <h3 class="text-lg font-semibold mb-4 border-b pb-2">Receiver Information</h3>

                <div class="space-y-4">
                    <div>
                        <label class="block font-medium text-gray-700">Receiver Name</label>
                        <input type="text" name="customer_name" class="w-full border rounded p-2 mt-1" required>
                    </div>

                    <div>
                        <label class="block font-medium text-gray-700">Receiver Address</label>
                        <textarea name="receiver_address" rows="3" class="w-full border rounded p-2 mt-1" required></textarea>
                    </div>

                    <div>
                        <label class="block font-medium text-gray-700">Receiver Email</label>
                        <input type="email" name="receiver_email" class="w-full border rounded p-2 mt-1" required>
                    </div>

                    <div>
                        <label class="block font-medium text-gray-700">Receiver Phone Number</label>
                        <input type="tel" name="receiver_phone" class="w-full border rounded p-2 mt-1" required>
                    </div>
                </div>
            </div>
        </div>

        {{-- Parcel Information Section --}}
        <div class="bg-white p-4 rounded-lg shadow">
            <h3 class="text-lg font-semibold mb-4 border-b pb-2">Parcel Information</h3>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div>
                    <label class="block font-medium text-gray-700">Sending Date</label>
                    <input type="date" name="sending_date" class="w-full border rounded p-2 mt-1" required>
                </div>

                <div>
                    <label class="block font-medium text-gray-700">Weight (kg/g)</label>
                    <input type="text" name="weight" class="w-full border rounded p-2 mt-1" placeholder="e.g. 2.5 kg" required>
                </div>

                <div>
                    <label class="block font-medium text-gray-700">Price (PKR)</label>
                    <input type="number" name="price" class="w-full border rounded p-2 mt-1" placeholder="e.g. 1500" required>
                </div>
            </div>

            <div class="mt-4">
                <label class="block font-medium text-gray-700">Notes</label>
                <textarea name="notes" rows="3" class="w-full border rounded p-2 mt-1"></textarea>
            </div>

            <div class="mt-4">
                <label class="block font-medium text-gray-700">Tracking Number</label>
                <input type="text" name="tracking_number" value="NCS{{ str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT) }}" class="w-full border rounded p-2 mt-1 bg-gray-100" readonly>
            </div>

            <div class="mt-4">
                <label class="block font-medium text-gray-700">Status</label>
                <select name="status" class="w-full border rounded p-2 mt-1">
                    <option value="Pending">Pending</option>
                    <option value="In Transit">In Transit</option>
                    <option value="Delivered">Delivered</option>
                </select>
            </div>
        </div>

        <div class="flex justify-end">
            <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition duration-200">Create Parcel</button>
        </div>
    </form>
</div>
</x-app-layout>
