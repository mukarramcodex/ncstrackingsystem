{{-- Flash Message --}}
    @if(session('success'))
        <div class="mb-4 p-4 bg-green-100 text-green-700 rounded">
            {{ session('success') }}
        </div>
    @endif

    {{-- Add Branch Form --}}
    <div class="mb-6 p-6 bg-gray-100 rounded shadow max-w-6xl">
        <h2 class="text-xl font-semibold mb-4">Add New Branch</h2>
        <form action="{{ route('branches.store') }}" method="POST">
            @csrf
            <div class="grid md:grid-cols-2 gap-4">
                <div>
                    <label class="block mb-1 font-medium">Branch Name</label>
                    <input type="text" name="name" class="w-full border rounded p-2" required>
                </div>
                <div>
                    <label class="block mb-1 font-medium">Email</label>
                    <input type="email" name="email" class="w-full border rounded p-2" required>
                </div>
                <div>
                    <label class="block mb-1 font-medium">Phone</label>
                    <input type="text" name="phone" class="w-full border rounded p-2" required>
                </div>
                <div>
                    <label class="block mb-1 font-medium">Status</label>
                    <select name="status" class="w-full border rounded p-2">
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                    </select>
                </div>
                <div class="md:col-span-2">
                    <label class="block mb-1 font-medium">Address</label>
                    <textarea name="address" class="w-full border rounded p-2" rows="2" required></textarea>
                </div>
            </div>
            <div class="mt-4">
                <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Add Branch</button>
            </div>
        </form>
    </div>
