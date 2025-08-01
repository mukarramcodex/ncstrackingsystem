<x-app-layout>
    <div class="container mx-auto px-4 py-6">
    <h1 class="text-2xl font-bold mb-6">All Registered Branches</h1>

    @if(session('success'))
        <div class="mb-4 p-4 bg-green-100 text-green-700 rounded">
            {{ session('success') }}
        </div>
    @endif

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white rounded shadow">
            <thead class="bg-gray-100">
                <tr>
                    <th class="py-3 px-4 text-left">#</th>
                    <th class="py-3 px-4 text-left">Branch Name</th>
                    <th class="py-3 px-4 text-left">Address</th>
                    <th class="py-3 px-4 text-left">Email</th>
                    <th class="py-3 px-4 text-left">Phone</th>
                    <th class="py-3 px-4 text-left">Status</th>
                    <th class="py-3 px-4 text-left">Created At</th>
                </tr>
            </thead>
            <tbody>
                @forelse($branches as $index => $branch)
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-3 px-4">{{ $index + 1 }}</td>
                        <td class="py-3 px-4">{{ $branch->name }}</td>
                        <td class="py-3 px-4">{{ $branch->address }}</td>
                        <td class="py-3 px-4">{{ $branch->email }}</td>
                        <td class="py-3 px-4">{{ $branch->phone }}</td>
                        <td class="py-3 px-4">
                            @if($branch->status === 'active')
                                <span class="px-2 py-1 bg-green-100 text-green-800 rounded text-sm">Active</span>
                            @else
                                <span class="px-2 py-1 bg-red-100 text-red-800 rounded text-sm">Inactive</span>
                            @endif
                        </td>
                        <td class="py-3 px-4">
                            {{ $branch->created_at ? $branch->created_at->format('d M Y') : 'N/A' }}
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="py-4 px-4 text-center text-gray-500">
                            No branches found.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
</x-app-layout>
