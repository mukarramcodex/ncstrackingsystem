<x-app-layout>
<div class="max-w-6xl mx-auto p-4">
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

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 ">
            {{-- Sender Information Column --}}
            <div class=" p-4 rounded-lg shadow bg-white">
                <h3 class="text-lg font-semibold mb-4 border-b pb-2">Sender Information</h3>

                <div class="space-y-4">
                    <div class="flex gap-2 ">
                        <div>
                            <label class="block font-medium text-gray-700">Sender Name</label>
                            <input type="text" name="sender_name" class="w-full border rounded p-2 mt-1" required>
                        </div>
                        <div>
                            <label class="block font-medium text-gray-700">Sender CNIC</label>
                            <input type="text" name="sender_cnic" class="w-full border rounded p-2 mt-1" required>
                        </div>

                    </div>

                    <div class="flex gap-2 ">
                        <div>
                            <label class="block font-medium text-gray-700">Sender Email</label>
                            <input type="email" name="sender_email" class="w-full border rounded p-2 mt-1" required>
                        </div>
                        <div>
                            <label class="block font-medium text-gray-700">Sender Phone</label>
                            <input type="tel" name="sender_phone" class="w-full border rounded p-2 mt-1" required>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Receiver Information Column --}}
            <div class="bg-white p-4 rounded-lg shadow">
                <h3 class="text-lg font-semibold mb-4 border-b pb-2">Receiver Information</h3>
                <div class="space-y-4">
                    <div class="flex gap-2 ">
                        <div>
                            <label class="block font-medium text-gray-700">Receiver Name</label>
                            <input type="text" name="receiver_name" class="w-full border rounded p-2 mt-1" required>
                        </div>
                        <div>
                            <label class="block font-medium text-gray-700">Receiver CNIC</label>
                            <input type="text" name="receiver_cnic" class="w-full border rounded p-2 mt-1" required>
                        </div>
                    </div>

                    <div class="flex gap-2 ">
                        <div>
                            <label class="block font-medium text-gray-700">Receiver Email</label>
                            <input type="email" name="receiver_email" class="w-full border rounded p-2 mt-1" required>
                        </div>
                        <div>
                            <label class="block font-medium text-gray-700">Receiver Phone</label>
                            <input type="tel" name="receiver_phone" class="w-full border rounded p-2 mt-1" required>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Parcel Information Section --}}
        <div class="bg-white p-4 rounded-lg shadow">
            <h3 class="text-lg font-semibold mb-4 border-b pb-2">Parcel Information</h3>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-3">
                <div class="mt-4">
                    <label class="block font-medium text-gray-700">Tracking Number</label>
                    <input type="text" name="tracking_number" value="NCS{{ str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT) }}" class="w-full border rounded p-2 mt-1 bg-gray-100 cursor-not-allowed" readonly>
                </div>
                <div class="mt-4">
                    <label class="block font-medium text-gray-700">Booking Time</label>
                    <input type="datetime-local" name="booking_time" class="w-full border rounded p-2 mt-1 cursor-not-allowed" id="bookingTime" required readonly>
                </div>
                <div class="mt-4">
                    <label class="block font-medium text-gray-700">Payment Status</label>
                    <select name="payment_status" class="w-full border rounded p-2 mt-1">
                        <option value="un Paid">Un Paid</option>
                        <option value="Paid">Paid</option>
                    </select>
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

            <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-4">
                <div class="mt-4">
                    <label class="block font-medium text-gray-700">Origin</label>
                    <input type="text" name="origin" class="w-full border rounded p-2 mt-1" placeholder="origin" required>
                </div>
                <div class="mt-4">
                    <label class="block font-medium text-gray-700">Destination</label>
                    <input type="text" name="destination" class="w-full border rounded p-2 mt-1" placeholder="destination" required>
                </div>
                <div class="mt-4">
                    <label class="block font-medium text-gray-700">Booking Point</label>
                    <input type="text" name="booking_point" class="w-full border rounded p-2 mt-1" placeholder="Booking Point" required>
                </div>
                <div class="mt-4">
                    <label class="block font-medium text-gray-700">Delivery Point</label>
                    <input type="text" name="delivery_point" class="w-full border rounded p-2 mt-1" placeholder="Delivery Point" required>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                <div>
                    <label class="block font-medium text-gray-700">Packing Type</label>
                    <input type="text" name="packing_type" class="w-full border rounded p-2 mt-1" placeholder="Box, Cotton, Bag, etc.." value="{{ old('packing_type'), 'Box' }}">
                    <select name="packing_type" id="" class="w-full border rounded p-2 mt-1" required>
                        <option value="Box" {{ old('packing_type', 'Box') == 'Box' ? 'selected' : '' }}>Box</option>
                        <option value="Envelope" {{ old('packing_type', 'Envelope') == 'Envelope' ? 'selected' : '' }}>Envelope</option>
                        <option value="Box" {{ old('packing_type', 'Crate') == 'Crate' ? 'selected' : '' }}>Crate</option>
                        <option value="Bag" {{ old('packing_type', 'Bag') == 'Bag' ? 'selected' : '' }}>Bag</option>
                    </select>
                </div>

                <div>
                    <label class="block font-medium text-gray-700">Dimension</label>
                    <input type="text" name="dimension" class="w-full border rounded p-2 mt-1" placeholder="10x5x3, 12x8x4, 15x10x6 ..." >
                </div>

                <div>
                    <label class="block font-medium text-gray-700">Pieces</label>
                    <input type="number" name="pieces" class="w-full border rounded p-2 mt-1" placeholder="1" required>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                <div class="mt-4">
                    <label class="block font-medium text-gray-700">Goods Description</label>
                    <textarea name="goods_description" rows="3" class="w-full border rounded p-2 mt-1"></textarea>
                </div>
                <div class="mt-4">
                    <label class="block font-medium text-gray-700">Remarks</label>
                    <textarea name="remarks" rows="3" class="w-full border rounded p-2 mt-1"></textarea>
                </div>
                <div class="mt-4">
                    <label class="block font-medium text-gray-700">Notes</label>
                    <textarea name="notes" rows="3" class="w-full border rounded p-2 mt-1"></textarea>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-4">
                <div>
                    <label class="block font-medium text-gray-700">Estimated Delivery Time</label>
                    <input type="date" name="delivery_time" class="w-full border rounded p-2 mt-1" required>
                </div>

                <div>
                    <label class="block font-medium text-gray-700">Weight (kg/g)</label>
                    <input type="text" name="weight" class="w-full border rounded p-2 mt-1" placeholder="e.g. 2.5 kg" required>
                </div>

                <div>
                    <label class="block font-medium text-gray-700">Fare (PKR)</label>
                    <input type="number" name="fare" class="w-full border rounded p-2 mt-1" placeholder="e.g. 1500" required>
                </div>

                <div>
                    <label class="block font-medium text-gray-700">Total Amount</label>
                    <input type="total_amount" name="fare" class="w-full border rounded p-2 mt-1" placeholder="e.g. 1500" required>
                </div>
            </div>

                {{-- <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-3">
                    <div class="mt-4">
                        <label class="block font-medium text-gray-700">Tracking Number</label>
                        <input type="text" name="tracking_number" value="NCS{{ str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT) }}" class="w-full border rounded p-2 mt-1 bg-gray-100" readonly>
                    </div>
                    <div class="mt-4">
                        <label class="block font-medium text-gray-700">Booking Time</label>
                        <input type="date" name="booking_time" class="w-full border rounded p-2 mt-1" required>
                    </div>
                    <div class="mt-4">
                        <label class="block font-medium text-gray-700">Payment Status</label>
                        <select name="payment_status" class="w-full border rounded p-2 mt-1">
                            <option value="un Paid">Un Paid</option>
                            <option value="Paid">Paid</option>
                        </select>
                    </div>
                        <div class="mt-4">
                            <label class="block font-medium text-gray-700">Status</label>
                            <select name="status" class="w-full border rounded p-2 mt-1">
                                <option value="Pending">Pending</option>
                                <option value="In Transit">In Transit</option>
                                <option value="Delivered">Delivered</option>
                            </select>
                        </div>
                </div> --}}
                <div class="mt-4 hidden">
                    <label class="block font-medium text-gray-700">Receipt Number</label>
                    <input type="text" name="receipt_number" value="{{ $nextReceipt }}" class="w-full border rounded p-2 mt-1 bg-gray-100" readonly>
                </div>
                <div class="mt-4 hidden">
                    <label class="block font-medium text-gray-700">Booking ID</label>
                    <input type="text" name="booking_id" value="{{ str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT) }}" class="w-full border rounded p-2 mt-1 bg-gray-100" readonly>
                </div>
                <div class="mt-4 hidden">
                    <label class="block font-medium text-gray-700">Booking ID</label>
                    <input type="hidden" name="booking_officer" value="{{ auth()->user()->id }}">
                </div>
        </div>

        <div class="flex justify-end gap-4">
            <a href="" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition duration-200 flex justify-between gap-3">Download
                <svg width="20px" height="20px" viewBox="0 0 15 15" fill="#ffffff" xmlns="http://www.w3.org/2000/svg">
                    <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M7.50005 1.04999C7.74858 1.04999 7.95005 1.25146 7.95005 1.49999V8.41359L10.1819 6.18179C10.3576 6.00605 10.6425 6.00605 10.8182 6.18179C10.994 6.35753 10.994 6.64245 10.8182 6.81819L7.81825 9.81819C7.64251 9.99392 7.35759 9.99392 7.18185 9.81819L4.18185 6.81819C4.00611 6.64245 4.00611 6.35753 4.18185 6.18179C4.35759 6.00605 4.64251 6.00605 4.81825 6.18179L7.05005 8.41359V1.49999C7.05005 1.25146 7.25152 1.04999 7.50005 1.04999ZM2.5 10C2.77614 10 3 10.2239 3 10.5V12C3 12.5539 3.44565 13 3.99635 13H11.0012C11.5529 13 12 12.5528 12 12V10.5C12 10.2239 12.2239 10 12.5 10C12.7761 10 13 10.2239 13 10.5V12C13 13.1041 12.1062 14 11.0012 14H3.99635C2.89019 14 2 13.103 2 12V10.5C2 10.2239 2.22386 10 2.5 10Z"
                        fill="#ffffff"
                    />
                </svg>
            </a>
            <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition duration-200">Create Parcel</button>
        </div>
    </form>
</div>
{{-- <script>
    // Fill the current date and time in the input
    const now = new Date();
    const localDatetime = now.toISOString().slice(0,16); // Format: yyyy-MM-ddTHH:mm
    document.getElementById('bookingTime').value = localDatetime;
</script> --}}
<script>
    const now = new Date();

    // Convert to local date & time in yyyy-MM-ddTHH:mm format
    const year = now.getFullYear();
    const month = String(now.getMonth() + 1).padStart(2, '0');
    const day = String(now.getDate()).padStart(2, '0');
    const hours = String(now.getHours()).padStart(2, '0');
    const minutes = String(now.getMinutes()).padStart(2, '0');

    const localDatetime = `${year}-${month}-${day}T${hours}:${minutes}`;

    document.getElementById('bookingTime').value = localDatetime;
</script>
</x-app-layout>
