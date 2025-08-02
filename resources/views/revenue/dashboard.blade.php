<x-app-layout>
    <div class="container mx-auto p-6">
    <h1 class="text-xl font-bold mb-4">Revenue Dashboard</h1>

    <form method="GET" class="mb-4 grid grid-cols-1 md:grid-cols-4 gap-4">
        <select name="branch_id" class="border rounded p-2">
            <option value="">All Branches</option>
            @foreach($branches as $branch)
                <option value="{{ $branch->id }}" {{ $branchId == $branch->id ? 'selected' : '' }}>
                    {{ $branch->name }}
                </option>
            @endforeach
        </select>

        <input type="date" name="start_date" value="{{ $startDate }}" class="border rounded p-2" />
        <input type="date" name="end_date" value="{{ $endDate }}" class="border rounded p-2" />

        <button class="bg-indigo-600 text-white px-4 py-2 rounded">Filter</button>
    </form>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
        <div class="bg-white shadow p-4 rounded text-center">
            <p class="text-gray-500">Today’s Revenue</p>
            <h3 class="text-xl font-bold text-green-600">Rs. {{ number_format($todayRevenue, 2) }}</h3>
        </div>
        <div class="bg-white shadow p-4 rounded text-center">
            <p class="text-gray-500">This Month</p>
            <h3 class="text-xl font-bold text-blue-600">Rs. {{ number_format($monthRevenue, 2) }}</h3>
        </div>
        <div class="bg-white shadow p-4 rounded text-center">
            <p class="text-gray-500">This Year</p>
            <h3 class="text-xl font-bold text-purple-600">Rs. {{ number_format($yearRevenue, 2) }}</h3>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Monthly Revenue Chart -->
        <div class="bg-white p-4 rounded shadow">
            <h2 class="text-lg font-semibold mb-2">Monthly Revenue</h2>
            <canvas id="monthlyRevenueChart"></canvas>
        </div>

        <!-- Branch Revenue Chart -->
        <div class="bg-white p-4 rounded shadow">
            <h2 class="text-lg font-semibold mb-2">Revenue by Branch</h2>
            <canvas id="branchRevenueChart"></canvas>
        </div>
    </div>
</div>

{{-- <a href="{{ route('revenue.export.pdf') }}" class="bg-red-600 text-white px-4 py-2 rounded mb-4 inline-block">Export PDF</a> --}}


@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Monthly Revenue Chart
    const monthlyCtx = document.getElementById('monthlyRevenueChart').getContext('2d');
    new Chart(monthlyCtx, {
        type: 'line',
        data: {
            labels: {!! json_encode($monthlyRevenue->pluck('month')) !!},
            datasets: [{
                label: 'Revenue (PKR)',
                data: {!! json_encode($monthlyRevenue->pluck('total_revenue')) !!},
                borderColor: '#4F46E5',
                backgroundColor: '#6366F1',
                tension: 0.4
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    // Branch Revenue Chart
    const branchCtx = document.getElementById('branchRevenueChart').getContext('2d');
    new Chart(branchCtx, {
        type: 'bar',
        data: {
            labels: {!! json_encode($revenueByBranch->pluck('branch_name')) !!},
            datasets: [{
                label: 'Revenue (PKR)',
                data: {!! json_encode($revenueByBranch->pluck('total_revenue')) !!},
                backgroundColor: '#10B981'
            }]
        },
        options: {
            responsive: true,
            indexAxis: 'y',
            scales: {
                x: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
</x-app-layout>
