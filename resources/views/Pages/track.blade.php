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
</x-app-layout>
