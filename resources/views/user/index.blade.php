<x-app-layout>
    <div class="p-6">
        <h1 class="text-2xl font-bold mb-4">All Registered Users</h1>

        <div class="overflow-x-auto bg-white shadow-md rounded-lg">
            <table class="min-w-full table-auto text-sm text-left text-gray-700">
                <thead class="bg-gray-100 text-xs uppercase text-gray-600">
                    <tr>
                        <th class="px-4 py-3">#</th>
                        <th class="px-4 py-3">Name</th>
                        <th class="px-4 py-3">Email</th>
                        <th class="px-4 py-3">Role</th>
                        <th class="px-4 py-3">Branch</th>
                        <th class="px-4 py-3">Contact</th>
                        <th class="px-4 py-3">Registered On</th>
                        <th class="px-4 py-3"></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $index => $user)
                        <tr class="border-b hover:bg-gray-50">
                            <td class="px-4 py-3">{{ $index + 1 }}</td>
                            <td class="px-4 py-3 font-medium">{{ $user->name }}</td>
                            <td class="px-4 py-3">{{ $user->email }}</td>
                            <td class="px-4 py-3">
                                <span class="inline-block rounded-full px-2 py-1 text-xs font-semibold
                                    {{ $user->role === 'admin' ? 'bg-blue-200 text-blue-800' : ($user->role === 'manager' ? 'bg-green-200 text-green-800' : 'bg-yellow-200 text-yellow-800') }}">
                                    {{ ucfirst($user->role) }}
                                </span>
                            </td>
                            {{-- <td class="px-4 py-3">{{ $user->branch }}</td>
                            <td class="px-4 py-3">{{ $user->phone }}</td>
                            <td class="px-4 py-3">{{ $user->created_at->format('d M Y') }}</td> --}}
                            <td class="px-4 py-3">Branch</td>
                            <td class="px-4 py-3">phone</td>
                            <td class="px-4 py-3">user created</td>
                            <td class="px-4 py-3 ">
                                <a href="#" class="text-white hover:bg-blue-900 bg-blue-600 rounded-lg py-1 px-3 ">View</a>
                                <a href="#" class="text-white bg-yellow-600 hover:bg-yellow-900 rounded-lg py-1 px-3">Edit</a>
                                {{-- <form action="#" method="POST" onsubmit="return confirm('Are you sure?')" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button class="text-white bg-red-600 hover:bg-red-900 rounded-lg py-1 px-3" type="submit">Delete</button>
                                </form> --}}
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="px-4 py-4 text-center text-gray-500">No users found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
