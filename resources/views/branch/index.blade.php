<x-app-layout>
    <div class="container mx-auto px-4 py-6">
    <h1 class="text-2xl font-bold mb-4">Manage Branches</h1>

    {{-- Search/Filter Form --}}
    <form method="GET" action="{{ route('branches.index') }}" class="mb-6 flex flex-wrap gap-4">
        <input type="text" name="search" value="{{ request('search') }}" placeholder="Search by branch name"
               class="border rounded p-2 w-64">
        <select name="status" class="border rounded p-2">
            <option value="">All Status</option>
            <option value="active" @selected(request('status') === 'active')>Active</option>
            <option value="inactive" @selected(request('status') === 'inactive')>Inactive</option>
        </select>
        <button class="bg-gray-800 text-white px-4 py-2 rounded hover:bg-gray-900">Filter</button>
    </form>

    {{-- Branches Table --}}
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white rounded shadow">
            <thead class="bg-gray-100">
                <tr>
                    <th class="py-3 px-4 text-left">#</th>
                    <th class="py-3 px-4 text-left">Branch Name</th>
                    <th class="py-3 px-4 text-left">Email</th>
                    <th class="py-3 px-4 text-left">Phone</th>
                    <th class="py-3 px-4 text-left">Status</th>
                    <th class="py-3 px-4 text-left">Created</th>
                    <th class="py-3 px-4 text-left">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($branches as $index => $branch)
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-3 px-4">{{ $index + 1 }}</td>
                        <td class="py-3 px-4">{{ $branch->name }}</td>
                        <td class="py-3 px-4">{{ $branch->email }}</td>
                        <td class="py-3 px-4">{{ $branch->phone }}</td>
                        <td class="py-3 px-4">
                            <span class="px-2 py-1 rounded text-sm
                                {{ $branch->status === 'active' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                {{ ucfirst($branch->status) }}
                            </span>
                        </td>
                        <td class="py-3 px-4">{{ $branch->created_at->format('d M Y') }}</td>
                        <td class="py-3 px-4 space-x-2">
                            <a href="{{ route('branches.edit', $branch->id) }}"
                               class="text-blue-600 hover:underline">Edit</a>
                            <form action="{{ route('branches.destroy', $branch->id) }}" method="POST" class="inline-block"
                                  onsubmit="return confirm('Are you sure you want to delete this branch?');">
                                @csrf
                                @method('DELETE')
                                <button class="text-red-600 hover:underline">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="py-4 px-4 text-center text-gray-500">No branches found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
</x-app-layout>
