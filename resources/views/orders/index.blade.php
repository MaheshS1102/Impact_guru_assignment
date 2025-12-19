<x-app-layout>

<h2 class="text-xl text-white mb-4">Orders</h2>

<a href="{{ route('orders.create') }}" 
 class="px-3 py-2 bg-indigo-600 text-white rounded">
 + Add Order
</a>

<table class="mt-4 border border-gray-700 text-gray-200 w-full">
<tr>
 <th class="border px-2 py-1">Order #</th>
 <th class="border px-2 py-1">Amount</th>
 <th class="border px-2 py-1">Status</th>
 <th class="border px-2 py-1">Customer</th>
</tr>

@foreach($orders as $order)
<tr>
 <td class="border px-2 py-1">{{ $order->order_number }}</td>
 <td class="border px-2 py-1">{{ $order->amount }}</td>
 <td class="border px-2 py-1">{{ $order->status }}</td>
 <td class="border px-2 py-1">{{ $order->customer->name }}</td>
</tr>
@endforeach

</table>

{{ $orders->links() }}

</x-app-layout>
