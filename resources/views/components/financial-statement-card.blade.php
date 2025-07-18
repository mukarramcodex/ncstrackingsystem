@props([
    'title' => '',
    'income' => 0,
    'expense' => 0,
    'balance' => null,
    'currency' => 'PKR',
])

<div class="bg-white rounded-lg shadow-md overflow-hidden">
    <div class="bg-gray-800 text-white px-4 py-2 text-center font-bold">
        {{ $title }}
    </div>
    <ul class="divide-y divide-gray-200">
        <li class="px-4 py-3 flex justify-between">
            <span class="font-medium">Income</span>
            <span>{{ $currency }}{{ number_format($icome, 2) }}</span>
        </li>
        <li class="px-4 py-3 flex justify-between">
            <span class="font-medium">Expense</span>
            <span>{{ $currency }}{{ number_format($expense, 2) }}</span>
        </li>
        <li class="px-4 py-3 flex justify-between">
            <span class="font-medium">Balance</span>
            <span>{{ $currency }}{{ number_format($balance ?? ($icome - $expense), 2) }}</span>
        </li>
    </ul>
</div>