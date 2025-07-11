@props(['onFinished' => null])

<div x-data="{
    isSuggesting: false,
    suggestion: null,
    isSubmitting: false,
    availableStaff: @json([
        ['id' => 'S001', 'name' => 'John Smith', 'currentLocation' => 'Downtown, Anytown'],
        ['id' => 'S002', 'name' => 'Maria Garcia', 'currentLocation' => 'Uptown, Anytown'],
        ['id' => 'S003', 'name' => 'David Johnson', 'currentLocation' => 'Midtown, Anytown'],
        ['id' => 'S004', 'name' => 'Emily White', 'currentLocation' => 'Suburbia, Anytown'],
    ]),
    
    async handleSuggestStaff() {
        const recipientAddress = this.$refs.recipientAddress.value;
        if (!recipientAddress) {
            // You might want to add error handling here
            return;
        }

        this.isSuggesting = true;
        this.suggestion = null;

        try {
            // In Laravel, you would make an AJAX call to your backend
            const response = await fetch('/api/suggest-staff', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({
                    parcelDestination: recipientAddress,
                    availableStaff: this.availableStaff.map(({ id, currentLocation }) => 
                        ({ staffId: id, currentLocation }))
                })
            });
            
            const result = await response.json();
            this.suggestion = result;
            this.$refs.assignedStaffId.value = result.suggestedStaffId;
        } catch (error) {
            console.error('Suggestion failed:', error);
            // You can add toast notification here
        } finally {
            this.isSuggesting = false;
        }
    },
    
    generateTrackingId() {
        return 'NCS' + Math.floor(100000 + Math.random() * 900000);
    }
}">
    <form 
        method="POST" 
        action="{{ route('parcels.store') }}" 
        class="space-y-6 max-h-[75vh] overflow-y-auto p-1"
        @submit.prevent="
            isSubmitting = true;
            const form = $event.target;
            const formData = new FormData(form);
            formData.append('tracking_id', generateTrackingId());
            
            fetch(form.action, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Accept': 'application/json'
                }
            })
            .then(response => response.json())
            .then(data => {
                // Handle success (show toast, reset form, etc.)
                isSubmitting = false;
                form.reset();
                suggestion = null;
                @if($onFinished) {{ $onFinished }} @endif
            })
            .catch(error => {
                isSubmitting = false;
                console.error('Error:', error);
            });
        "
    >
        @csrf
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="space-y-4">
                <h3 class="text-lg font-medium">Sender Information</h3>
                <div>
                    <label for="senderName" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Name</label>
                    <input 
                        type="text" 
                        id="senderName" 
                        name="senderName" 
                        placeholder="John Doe" 
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-gray-800 dark:border-gray-600"
                        required
                        minlength="2"
                    >
                    @error('senderName')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="senderAddress" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Address</label>
                    <textarea 
                        id="senderAddress" 
                        name="senderAddress" 
                        placeholder="123 Main St..." 
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-gray-800 dark:border-gray-600"
                        required
                        minlength="10"
                    ></textarea>
                    @error('senderAddress')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            
            <div class="space-y-4">
                <h3 class="text-lg font-medium">Recipient Information</h3>
                <div>
                    <label for="recipientName" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Name</label>
                    <input 
                        type="text" 
                        id="recipientName" 
                        name="recipientName" 
                        placeholder="Jane Smith" 
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-gray-800 dark:border-gray-600"
                        required
                        minlength="2"
                    >
                    @error('recipientName')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="recipientEmail" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
                    <input 
                        type="email" 
                        id="recipientEmail" 
                        name="recipientEmail" 
                        placeholder="jane@example.com" 
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-gray-800 dark:border-gray-600"
                        required
                    >
                    @error('recipientEmail')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="recipientAddress" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Address</label>
                    <textarea 
                        id="recipientAddress" 
                        name="recipientAddress" 
                        x-ref="recipientAddress"
                        placeholder="456 Oak Ave..." 
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-gray-800 dark:border-gray-600"
                        required
                        minlength="10"
                    ></textarea>
                    @error('recipientAddress')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>

        <div class="space-y-4">
            <h3 class="text-lg font-medium">Parcel Details & Assignment</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="parcelDescription" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Description</label>
                    <textarea 
                        id="parcelDescription" 
                        name="parcelDescription" 
                        placeholder="Contents of the parcel" 
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-gray-800 dark:border-gray-600"
                        required
                        minlength="5"
                    ></textarea>
                    @error('parcelDescription')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="parcelWeight" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Weight (kg)</label>
                    <input 
                        type="number" 
                        id="parcelWeight" 
                        name="parcelWeight" 
                        step="0.1" 
                        placeholder="2.5" 
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-gray-800 dark:border-gray-600"
                        required
                        min="0.1"
                    >
                    @error('parcelWeight')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-end">
                <div>
                    <label for="assignedStaffId" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Assign Delivery Staff</label>
                    <select 
                        id="assignedStaffId" 
                        name="assignedStaffId" 
                        x-ref="assignedStaffId"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-gray-800 dark:border-gray-600"
                    >
                        <option value="">Select a staff member</option>
                        <template x-for="staff in availableStaff" :key="staff.id">
                            <option :value="staff.id" x-text="staff.name"></option>
                        </template>
                    </select>
                    @error('assignedStaffId')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <button 
                    type="button" 
                    @click="handleSuggestStaff" 
                    :disabled="isSuggesting"
                    class="inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-300 dark:hover:bg-gray-700"
                >
                    <template x-if="isSuggesting">
                        <svg class="animate-spin -ml-1 mr-2 h-4 w-4 text-gray-700 dark:text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                    </template>
                    <template x-if="!isSuggesting">
                        <svg class="-ml-1 mr-2 h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 3a3 3 0 0 0-3 3c0 1.29-.63 2.44-1.6 3.1L12 12l4.6-2.9c-.97-.66-1.6-1.81-1.6-3.1a3 3 0 0 0-3-3Z"/><path d="M12 12l4.6 2.9c-.97.66-1.6 1.81-1.6 3.1a3 3 0 0 0 6 0c0-1.29-.63-2.44-1.6-3.1L12 12"/><path d="M12 12l-4.6 2.9c.97.66 1.6 1.81 1.6 3.1a3 3 0 0 1-6 0c0-1.29.63-2.44 1.6-3.1L12 12"/>
                        </svg>
                    </template>
                    Suggest Staff
                </button>
            </div>
            <template x-if="suggestion">
                <div class="p-4 bg-green-50 border border-green-200 rounded-md text-sm dark:bg-green-950 dark:border-green-800">
                    <p class="font-semibold flex items-center gap-2 text-green-800 dark:text-green-300">
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                        </svg>
                        AI Suggestion:
                    </p>
                    <p class="text-green-700 dark:text-green-400 mt-1" x-text="suggestion.reason"></p>
                </div>
            </template>
        </div>

        <div class="flex justify-end pt-4">
            <button 
                type="submit" 
                :disabled="isSubmitting"
                class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 disabled:opacity-75"
            >
                <template x-if="isSubmitting">
                    <svg class="animate-spin -ml-1 mr-2 h-4 w-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                </template>
                Create Shipment
            </button>
        </div>
    </form>
</div>