<x-app-layout>
{{-- <div class="max-w-2xl mx-auto p-4">
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
</div> --}}
<div class="bg-gray-100 p-4">
    <div class="max-w-5xl mx-auto">
        <div class="grid grid-cols-1 gap-4">
            <div class="col-span-1">
                <div class="bg-white rounded-lg shadow">
                    <div class="p-4 border-b">
                        <p class="text-xl font-bold">Tracking Number: {{ $parcel->tracking_number }}</p>
                        {{-- <a href="{{ route('parcels.edit', $parcel->id) }}" class="bg-blue-500 text-white px-4 py-1 rounded hover:bg-blue-800">Download Reciept</a> --}}
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="col-span-1">
                    <div class="bg-white rounded-lg shadow">
                        <div class="p-4 border-b">
                            <p class="text-xl font-bold">Parcel Details</p>
                        </div>
                        <div class="p-4">
                            <div class="overflow-x-auto">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        <tr>
                                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">
                                                Booking Date & Time:
                                            </td>
                                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">
                                                {{ $parcel->booking_time }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">
                                                Payment Status:
                                            </td>
                                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">
                                                {{ $parcel->payment_status }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">
                                                Status:
                                            </td>
                                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">
                                                {{ $parcel->status }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">
                                                Goods Description:
                                            </td>
                                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">
                                                {{ $parcel->goods_description }}
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-1">
                    <div class="bg-white rounded-lg shadow">
                        <div class="p-4 border-b">
                            <p class="text-xl font-bold">Delivery Details</p>
                        </div>
                        <div class="p-4">
                            <div class="overflow-x-auto">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        <tr>
                                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">
                                                Origin:
                                            </td>
                                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">
                                                {{ $parcel->origin }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">
                                                Destinantion:
                                            </td>
                                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">
                                                {{ $parcel->destination }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">
                                                Booking Point:
                                            </td>
                                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">
                                                {{ $parcel->booking_point }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">
                                                Delivery Point:
                                            </td>
                                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">
                                                {{ $parcel->delivery_point }}
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-1">
                    <div class="bg-white rounded-lg shadow">
                        <div class="p-4 border-b">
                            <p class="text-xl font-bold">Sender Information</p>
                        </div>
                        <div class="p-4">
                            <div class="overflow-x-auto">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        <tr>
                                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">
                                                Name:
                                            </td>
                                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">
                                                {{ $parcel->sender_name }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">
                                                CNIC:
                                            </td>
                                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">
                                                {{ $parcel->sender_cnic }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">
                                                Email:
                                            </td>
                                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">
                                                {{ $parcel->sender_email }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">
                                                Phone:
                                            </td>
                                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">
                                                {{ $parcel->sender_phone }}
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-1">
                    <div class="bg-white rounded-lg shadow">
                        <div class="p-4 border-b">
                            <p class="text-xl font-bold">Recipient Info</p>
                        </div>
                        <div class="p-4">
                            <div class="overflow-x-auto">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        <tr>
                                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">
                                                Name:
                                            </td>
                                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">
                                                {{ $parcel->receiver_name }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">
                                                CNIC:
                                            </td>
                                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">
                                                {{ $parcel->receiver_cnic }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">
                                                Email:
                                            </td>
                                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">
                                                {{ $parcel->receiver_email }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">
                                                Phone:
                                            </td>
                                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">
                                                {{ $parcel->receiver_phone }}
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-6 flex space-x-4">
            <a href="{{ route('parcel.download', $parcel->tracking_number) }}" target="_blank" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-800 flex justify-between gap-3">Download PDF
                <svg width="20px" height="20px" viewBox="0 0 15 15" fill="#ffffff" xmlns="http://www.w3.org/2000/svg">
                    <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M7.50005 1.04999C7.74858 1.04999 7.95005 1.25146 7.95005 1.49999V8.41359L10.1819 6.18179C10.3576 6.00605 10.6425 6.00605 10.8182 6.18179C10.994 6.35753 10.994 6.64245 10.8182 6.81819L7.81825 9.81819C7.64251 9.99392 7.35759 9.99392 7.18185 9.81819L4.18185 6.81819C4.00611 6.64245 4.00611 6.35753 4.18185 6.18179C4.35759 6.00605 4.64251 6.00605 4.81825 6.18179L7.05005 8.41359V1.49999C7.05005 1.25146 7.25152 1.04999 7.50005 1.04999ZM2.5 10C2.77614 10 3 10.2239 3 10.5V12C3 12.5539 3.44565 13 3.99635 13H11.0012C11.5529 13 12 12.5528 12 12V10.5C12 10.2239 12.2239 10 12.5 10C12.7761 10 13 10.2239 13 10.5V12C13 13.1041 12.1062 14 11.0012 14H3.99635C2.89019 14 2 13.103 2 12V10.5C2 10.2239 2.22386 10 2.5 10Z"
                        fill="#ffffff"
                    />
                </svg>
            </a>
            <a href="{{ route('parcels.edit', $parcel->id) }}" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-800">Edit</a>
            <a href="{{ route('parcels.index') }}" class="bg-gray-600 text-white px-4 py-2 rounded hover:bg-gray-700">Back</a>
        </div>
    </div>

</div>
</x-app-layout>
