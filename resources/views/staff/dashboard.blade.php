@extends('layouts.applayout', [
    'role' => 'staff',
    'userName' => auth()->user()->name,
    'showSearch' => false,
    'navItems' => config('navigation.staff')
])

@section('content')
<div class="space-y-6">
    <h1 class="text-3xl font-bold">Add New Parcel</h1>
    
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Parcel Information Card -->
        <div class="lg:col-span-2 rounded-lg border bg-card text-card-foreground shadow-md">
            <div class="flex flex-col space-y-1.5 p-6">
                <h2 class="text-2xl font-semibold leading-none tracking-tight">Parcel Information</h2>
                <p class="text-sm text-muted-foreground">Enter the details for the new parcel.</p>
            </div>
            <div class="p-6 pt-0">
                <form id="parcel-form" class="space-y-4">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="space-y-1.5">
                            <label for="senderName" class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">
                                Sender Name
                            </label>
                            <input 
                                id="senderName" 
                                name="sender_name"
                                type="text"
                                placeholder="John Doe"
                                required
                                class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                            >
                        </div>
                        <div class="space-y-1.5">
                            <label for="recipientName" class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">
                                Recipient Name
                            </label>
                            <input 
                                id="recipientName" 
                                name="recipient_name"
                                type="text"
                                placeholder="Jane Smith"
                                required
                                class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                            >
                        </div>
                    </div>
                    <div class="space-y-1.5">
                        <label for="recipientAddress" class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">
                            Recipient Address
                        </label>
                        <textarea 
                            id="recipientAddress" 
                            name="recipient_address"
                            placeholder="123 Main St, Anytown, USA"
                            required
                            class="flex min-h-[80px] w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                        ></textarea>
                    </div>
                    <div class="space-y-1.5">
                        <label for="parcelDescription" class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">
                            Parcel Description
                        </label>
                        <input 
                            id="parcelDescription" 
                            name="parcel_description"
                            type="text"
                            placeholder="Books, Electronics, etc."
                            class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                        >
                    </div>
                    <button
                        type="submit"
                        id="submit-btn"
                        class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2 w-full sm:w-auto"
                    >
                        Add Parcel & Generate ID
                    </button>
                </form>
            </div>
        </div>

        <!-- Tracking & Actions Card -->
        <div class="rounded-lg border bg-card text-card-foreground shadow-md">
            <div class="flex flex-col space-y-1.5 p-6">
                <h2 class="text-2xl font-semibold leading-none tracking-tight">Tracking & Actions</h2>
            </div>
            <div class="p-6 pt-0 space-y-4">
                <div id="tracking-id-container" class="space-y-2 hidden">
                    <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">
                        Generated Tracking ID
                    </label>
                    <p id="tracking-id" class="text-2xl font-mono font-bold text-primary bg-muted p-3 rounded-md text-center"></p>
                </div>
                <div class="space-y-2">
                    <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">
                        Barcode
                    </label>
                    <div id="barcode-container" class="border border-dashed border-border rounded-md p-4 flex flex-col items-center justify-center aspect-[2/1] bg-muted/50">
                        <div class="text-center text-muted-foreground">
                            <svg id="barcode-icon" class="h-12 w-12 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9h18v2H3zm0 4h18v2H3zm0 4h18v2H3z"/>
                            </svg>
                            <p>Barcode will appear here</p>
                        </div>
                        <img id="barcode-image" src="" alt="Parcel Barcode" class="object-contain hidden w-full h-full">
                    </div>
                </div>
            </div>
            <div class="flex items-center p-6 pt-0">
                <button
                    id="generate-pdf-btn"
                    type="button"
                    disabled
                    class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2 w-full"
                >
                    <svg class="mr-2 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                    Generate PDF Label
                </button>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript for handling form submission -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('parcel-form');
    const submitBtn = document.getElementById('submit-btn');
    const trackingIdContainer = document.getElementById('tracking-id-container');
    const trackingIdElement = document.getElementById('tracking-id');
    const barcodeContainer = document.getElementById('barcode-container');
    const barcodeIcon = document.getElementById('barcode-icon');
    const barcodeImage = document.getElementById('barcode-image');
    const generatePdfBtn = document.getElementById('generate-pdf-btn');

    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Show loading state
        submitBtn.disabled = true;
        submitBtn.textContent = 'Processing...';
        
        // Simulate API call
        setTimeout(function() {
            // Generate random tracking ID
            const newTrackingId = 'ST' + Math.floor(10000 + Math.random() * 90000);
            
            // Display tracking ID
            trackingIdElement.textContent = newTrackingId;
            trackingIdContainer.classList.remove('hidden');
            
            // Show barcode
            barcodeIcon.classList.add('hidden');
            barcodeImage.src = 'https://placehold.co/300x150.png?text=' + newTrackingId;
            barcodeImage.classList.remove('hidden');
            
            // Enable PDF button
            generatePdfBtn.disabled = false;
            
            // Reset form button
            submitBtn.disabled = false;
            submitBtn.textContent = 'Add Parcel & Generate ID';
            
            // In a real app, you would submit the form to the server here
            // const formData = new FormData(form);
            // fetch('/staff/parcels', {
            //     method: 'POST',
            //     body: formData
            // }).then(response => response.json())
            //   .then(data => {
            //       // Handle response
            //   });
            
        }, 1000);
    });
    
    // PDF generation would be handled server-side
    generatePdfBtn.addEventListener('click', function() {
        if (!trackingIdElement.textContent) return;
        
        // In a real app, this would call a server endpoint to generate PDF
        window.location.href = `/staff/parcels/${trackingIdElement.textContent}/label`;
    });
});
</script>
@endsection