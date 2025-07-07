<x-guest-layout>
<div class="flex flex-col items-center bg-background p-4 pt-8 md:pt-16">
    <div class="w-full max-w-lg mb-8 rounded-lg border bg-card text-card-foreground shadow-lg">
        <div class="flex flex-col space-y-1.5 p-6">
            <h2 class="text-2xl font-semibold leading-none tracking-tight text-center">Track Your Parcel</h2>
            <p class="text-sm text-muted-foreground text-center">
                Enter your tracking ID to see the latest updates.
            </p>
        </div>
        <div class="p-6 pt-0">
            <form id="tracking-form" class="space-y-4">
                @csrf
                <div>
                    <label for="trackingId" class="sr-only">Tracking ID</label>
                    <input
                        id="trackingId"
                        name="tracking_id"
                        placeholder="Enter Tracking ID (e.g., NCS12345)"
                        class="flex h-12 w-full rounded-md border border-input bg-background px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 text-center"
                        required
                    >
                </div>
                <button
                    type="submit"
                    id="track-button"
                    class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-12 px-4 py-2 w-full text-base"
                >
                    Track Parcel
                </button>
            </form>
            <div id="error-message" class="mt-4 text-center text-destructive hidden"></div>
        </div>
    </div>

    <!-- Results Container (will be populated via JavaScript) -->
    <div id="tracking-results" class="w-full max-w-3xl hidden rounded-lg border bg-card text-card-foreground shadow-lg animate-in fade-in-50 duration-500">
        <!-- Results will be inserted here -->
    </div>
</div>

<!-- JavaScript for handling tracking -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('tracking-form');
    const trackButton = document.getElementById('track-button');
    const errorMessage = document.getElementById('error-message');
    const resultsContainer = document.getElementById('tracking-results');

    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        const trackingId = document.getElementById('trackingId').value.trim();
        
        // Show loading state
        trackButton.disabled = true;
        trackButton.textContent = 'Tracking...';
        errorMessage.classList.add('hidden');
        resultsContainer.classList.add('hidden');
        
        // Simulate API call
        setTimeout(function() {
            if (trackingId.toUpperCase() === 'NCS12345') {
                // Mock parcel data
                const parcelData = {
                    trackingId: "NCS12345",
                    status: "In Transit",
                    deliveryDate: "2024-07-28",
                    currentLocation: "New York Hub, NY",
                    history: [
                        { timestamp: "2024-07-22 10:00 AM", status: "Order Placed", location: "Origin Facility, CA", description: "Parcel information received." },
                        { timestamp: "2024-07-22 02:30 PM", status: "Picked Up", location: "Origin Facility, CA", description: "Parcel collected by courier." },
                        { timestamp: "2024-07-23 08:15 AM", status: "Departed Hub", location: "Los Angeles Hub, CA", description: "Parcel left sorting facility." },
                        { timestamp: "2024-07-24 05:45 PM", status: "Arrived at Hub", location: "New York Hub, NY", description: "Parcel arrived at destination hub." },
                        { timestamp: "2024-07-25 09:00 AM", status: "Out for Delivery", location: "New York, NY", description: "Parcel is with the delivery agent." },
                    ]
                };
                
                renderTrackingResults(parcelData);
            } else {
                errorMessage.textContent = "Invalid Tracking ID. Please check and try again.";
                errorMessage.classList.remove('hidden');
            }
            
            trackButton.disabled = false;
            trackButton.textContent = 'Track Parcel';
        }, 1000);
    });

    function getEventIcon(status, isLatest) {
        if (isLatest) return `<svg class="h-5 w-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>`;
        if (status.toLowerCase().includes("delivered")) return `<svg class="h-5 w-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>`;
        if (status.toLowerCase().includes("transit") || status.toLowerCase().includes("departed") || status.toLowerCase().includes("arrived")) return `<svg class="h-5 w-5 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"/></svg>`;
        if (status.toLowerCase().includes("picked up") || status.toLowerCase().includes("placed")) return `<svg class="h-5 w-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>`;
        return `<svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 12m-10 0a10 10 0 1 0 20 0a10 10 0 1 0 -20 0"/></svg>`;
    }

    function renderTrackingResults(parcel) {
        // Create the HTML for tracking results
        let html = `
            <div class="bg-muted/30 p-6">
                <h2 class="text-xl font-semibold leading-none tracking-tight">
                    Tracking ID: <span class="text-primary font-mono">${parcel.trackingId}</span>
                </h2>
                <p class="text-sm text-muted-foreground">
                    Status: <span class="font-semibold text-primary">${parcel.status}</span> | 
                    Expected Delivery: ${parcel.deliveryDate}
                </p>
                ${parcel.currentLocation ? `
                <p class="text-sm text-muted-foreground flex items-center gap-1 mt-1">
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    Current Location: ${parcel.currentLocation}
                </p>
                ` : ''}
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3">
                <div class="md:col-span-2 p-6">
                    <h3 class="text-lg font-semibold mb-4">Shipment History</h3>
                    <div class="relative space-y-6 border-l-2 border-border pl-6">
                        ${parcel.history.slice().reverse().map((event, index) => `
                            <div class="relative flex items-start">
                                <div class="absolute -left-[34px] top-0.5 bg-background p-1 rounded-full">
                                    ${getEventIcon(event.status, index === 0)}
                                </div>
                                <div>
                                    <p class="font-semibold text-foreground">${event.status}</p>
                                    <p class="text-sm text-muted-foreground flex items-center gap-1.5">
                                        <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                        ${event.timestamp}
                                    </p>
                                    <p class="text-sm text-muted-foreground flex items-center gap-1.5">
                                        <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                        ${event.location}
                                    </p>
                                    ${event.description ? `<p class="text-xs text-muted-foreground mt-1">${event.description}</p>` : ''}
                                </div>
                            </div>
                        `).join('')}
                    </div>
                </div>
                
            </div>
        `;

        // Insert the HTML and show the container
        resultsContainer.innerHTML = html;
        resultsContainer.classList.remove('hidden');
    }
});
</script>
</x-guest-layout>