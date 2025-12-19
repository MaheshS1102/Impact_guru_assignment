<x-app-layout>

    <h2 class="text-xl text-white mb-6">Add Order</h2>

    <form method="POST" action="{{ route('orders.store') }}" class="space-y-4">
        @csrf

        <select name="customer_id" class="border bg-gray-900 text-white p-2">
            <option>Select Customer</option>
            @foreach($customers as $customer)
                <option value="{{ $customer->id }}">{{ $customer->name }}</option>
            @endforeach
        </select>

        <input name="order_number" placeholder="Order No" 
               class="border bg-gray-900 text-white p-2">

        <input name="amount" placeholder="Amount" 
               class="border bg-gray-900 text-white p-2">

        <select name="status" class="border bg-gray-900 text-white p-2">
            <option>Pending</option>
            <option>Completed</option>
            <option>Cancelled</option>
        </select>

        <button class="px-4 py-2 bg-green-600 text-white rounded">Save</button>
    </form>

</x-app-layout>
