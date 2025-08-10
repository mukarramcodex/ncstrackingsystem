<x-app-layout>
    <div class="bg-white p-6 rounded-lg shadow-lg max-w-md">
        <h3 class="text-lg font-semibold text-gray-800 mb-4">Track Your Package</h3>
        <div class="flex gap-3">
                            <input
                                type="text"
                                id="tracking-input"
                                placeholder="Enter Tracking ID (e.g., NCS123456789)"
                                class="flex-1 px-4 py-3 border border-gray-300 !rounded-button focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent text-sm"
                            >
                            <button
                                id="track-btn"
                                class="bg-primary text-white px-6 py-3 !rounded-button hover:bg-opacity-90 transition-colors whitespace-nowrap"
                            >
                                Track Now
                            </button>
        </div>
     </div>
     <div id="tracking-modal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50 flex items-center justify-center p-4">
        <div class="bg-white rounded-lg max-w-4xl w-full max-h-[90vh] overflow-y-auto">
            <div class="p-6 border-b border-gray-200 flex items-center justify-between">
                <h2 class="text-2xl font-bold text-gray-800">Tracking Results</h2>
                <button id="close-modal" class="w-8 h-8 flex items-center justify-center text-gray-500 hover:text-gray-700">
                    <i class="ri-close-line ri-lg"></i>
                </button>
            </div>

            <div id="tracking-content" class="p-6">
            </div>
        </div>
    </div>
     <script id="tracking-functionality">
        document.addEventListener('DOMContentLoaded', function() {
            const trackingInput = document.getElementById('tracking-input');
            const trackBtn = document.getElementById('track-btn');
            const modal = document.getElementById('tracking-modal');
            const closeModal = document.getElementById('close-modal');
            const trackingContent = document.getElementById('tracking-content');

            const mockTrackingData = {
                'NCS123456789': {
                    id: 'NCS123456789',
                    status: 'In Transit',
                    sender: 'Amazon Warehouse NYC',
                    receiver: 'John Smith',
                    address: '789 Oak Street, Boston, MA 02101',
                    weight: '2.5 kg',
                    type: 'Express Delivery',
                    estimatedDelivery: '2024-07-25',
                    currentStep: 2,
                    history: [
                        { date: '2024-07-24 09:15', location: 'New York, NY', status: 'Package picked up from sender', icon: 'ri-box-3-line' },
                        { date: '2024-07-24 14:30', location: 'Hartford, CT', status: 'In transit - Arrived at sorting facility', icon: 'ri-truck-line' },
                        { date: '2024-07-24 18:45', location: 'Springfield, MA', status: 'In transit - Departed from facility', icon: 'ri-road-map-line' },
                        { date: '2024-07-25 08:00', location: 'Boston, MA', status: 'Out for delivery', icon: 'ri-map-pin-line' }
                    ]
                },
                'NCS987654321': {
                    id: 'NCS987654321',
                    status: 'Delivered',
                    sender: 'TechStore Inc.',
                    receiver: 'Sarah Johnson',
                    address: '456 Pine Avenue, Seattle, WA 98101',
                    weight: '1.2 kg',
                    type: 'Standard Delivery',
                    estimatedDelivery: '2024-07-23',
                    currentStep: 4,
                    history: [
                        { date: '2024-07-22 10:30', location: 'Los Angeles, CA', status: 'Package picked up from sender', icon: 'ri-box-3-line' },
                        { date: '2024-07-22 16:15', location: 'San Francisco, CA', status: 'In transit - Processing at facility', icon: 'ri-truck-line' },
                        { date: '2024-07-23 11:20', location: 'Portland, OR', status: 'In transit - Departed from facility', icon: 'ri-road-map-line' },
                        { date: '2024-07-23 15:45', location: 'Seattle, WA', status: 'Delivered successfully', icon: 'ri-checkbox-circle-line' }
                    ]
                }
            };

            function showTrackingResults(trackingId) {
                const data = mockTrackingData[trackingId];

                if (!data) {
                    trackingContent.innerHTML = `
                        <div class="text-center py-12">
                            <div class="w-16 h-16 flex items-center justify-center bg-red-100 rounded-full mx-auto mb-4">
                                <i class="ri-error-warning-line ri-2x text-red-500"></i>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">Tracking ID Not Found</h3>
                            <p class="text-gray-600 mb-6">
                                We couldn't find any package with tracking ID: <strong>${trackingId}</strong>
                            </p>
                            <p class="text-sm text-gray-500">
                                Please check your tracking ID and try again, or contact our support team for assistance.
                            </p>
                        </div>
                    `;
                } else {
                    const steps = ['Booked', 'In Transit', 'Out for Delivery', 'Delivered'];
                    const stepIcons = ['ri-box-3-line', 'ri-truck-line', 'ri-map-pin-line', 'ri-checkbox-circle-line'];

                    trackingContent.innerHTML = `
                        <div class="mb-8">
                            <div class="flex items-center justify-between mb-4">
                                <div>
                                    <h3 class="text-xl font-semibold text-gray-800">Tracking ID: ${data.id}</h3>
                                    <p class="text-gray-600">Current Status: <span class="font-semibold text-primary">${data.status}</span></p>
                                </div>
                                <div class="text-right">
                                    <p class="text-sm text-gray-600">Estimated Delivery</p>
                                    <p class="font-semibold text-gray-800">${data.estimatedDelivery}</p>
                                </div>
                            </div>

                            <div class="flex items-center justify-between mb-8">
                                ${steps.map((step, index) => `
                                    <div class="flex flex-col items-center flex-1">
                                        <div class="w-12 h-12 flex items-center justify-center rounded-full mb-2 ${
                                            index < data.currentStep ? 'bg-primary text-white' :
                                            index === data.currentStep ? 'bg-secondary text-white' : 'bg-gray-200 text-gray-400'
                                        }">
                                            <i class="${stepIcons[index]} ri-lg"></i>
                                        </div>
                                        <span class="text-sm font-medium ${
                                            index <= data.currentStep ? 'text-gray-800' : 'text-gray-400'
                                        }">${step}</span>
                                        ${index < steps.length - 1 ? `
                                            <div class="w-full h-1 mt-2 ${
                                                index < data.currentStep ? 'bg-primary' : 'bg-gray-200'
                                            }"></div>
                                        ` : ''}
                                    </div>
                                `).join('')}
                            </div>
                        </div>

                        <div class="grid md:grid-cols-2 gap-8 mb-8">
                            <div class="bg-gray-50 p-6 rounded-lg">
                                <h4 class="font-semibold text-gray-800 mb-4">Package Information</h4>
                                <div class="space-y-3">
                                    <div class="flex justify-between">
                                        <span class="text-gray-600">Sender:</span>
                                        <span class="font-medium">${data.sender}</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-gray-600">Receiver:</span>
                                        <span class="font-medium">${data.receiver}</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-gray-600">Weight:</span>
                                        <span class="font-medium">${data.weight}</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-gray-600">Service Type:</span>
                                        <span class="font-medium">${data.type}</span>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-gray-50 p-6 rounded-lg">
                                <h4 class="font-semibold text-gray-800 mb-4">Delivery Address</h4>
                                <p class="text-gray-700 mb-4">${data.address}</p>
                                <div class="bg-white p-4 rounded border-2 border-dashed border-gray-300 text-center">
                                    <div class="w-16 h-16 flex items-center justify-center bg-gray-100 rounded mx-auto mb-2">
                                        <i class="ri-qr-code-line ri-2x text-gray-600"></i>
                                    </div>
                                    <p class="text-sm text-gray-600">QR Code for Mobile Tracking</p>
                                </div>
                            </div>
                        </div>

                        <div>
                            <h4 class="font-semibold text-gray-800 mb-4">Tracking History</h4>
                            <div class="space-y-4">
                                ${data.history.map((event, index) => `
                                    <div class="flex items-start space-x-4 p-4 ${index === 0 ? 'bg-blue-50' : 'bg-gray-50'} rounded-lg">
                                        <div class="w-10 h-10 flex items-center justify-center bg-white rounded-full flex-shrink-0">
                                            <i class="${event.icon} text-primary"></i>
                                        </div>
                                        <div class="flex-1">
                                            <div class="flex items-center justify-between mb-1">
                                                <p class="font-medium text-gray-800">${event.status}</p>
                                                <span class="text-sm text-gray-500">${event.date}</span>
                                            </div>
                                            <p class="text-sm text-gray-600">${event.location}</p>
                                        </div>
                                    </div>
                                `).join('')}
                            </div>
                        </div>
                    `;
                }

                modal.classList.remove('hidden');
            }

            trackBtn.addEventListener('click', function() {
                const trackingId = trackingInput.value.trim();
                if (trackingId) {
                    showTrackingResults(trackingId);
                }
            });

            trackingInput.addEventListener('keypress', function(e) {
                if (e.key === 'Enter') {
                    const trackingId = trackingInput.value.trim();
                    if (trackingId) {
                        showTrackingResults(trackingId);
                    }
                }
            });

            closeModal.addEventListener('click', function() {
                modal.classList.add('hidden');
            });

            modal.addEventListener('click', function(e) {
                if (e.target === modal) {
                    modal.classList.add('hidden');
                }
            });
        });
    </script>
</x-app-layout>
