<x-app-layout>
    <h2>Total Revenue: Rs. {{ number_format($totalRevenue, 2) }}</h2>

<table>
    <thead>
        <tr>
            <th>Branch</th>
            <th>Revenue</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($revenueByBranch as $branch)
            <tr>
                <td>{{ $branch->name }}</td>
                <td>Rs. {{ number_format($branch->parcels_sum_price, 2) }}</td>
                <td>
                    <a href="{{ route('revenue.branch', $branch->id) }}">Details</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</x-app-layout>
