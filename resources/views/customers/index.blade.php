<x-app-layout>

    <h2 class="text-2xl font-semibold text-white mb-6">Customers</h2>

    <a href="{{ route('customers.create') }}" 
       class="px-4 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-800">
       + Add Customer
    </a>
    <a href="{{ route('customers.export.csv') }}" 
   class="px-4 py-2 bg-yellow-600 text-white rounded hover:bg-yellow-800 ml-3">
   Export CSV
</a>


    @if(session('success'))
        <p class="mt-2 text-green-400">{{ session('success') }}</p>
    @endif

    <table class="mt-6 w-full border border-gray-700 text-gray-200">
        <thead class="bg-gray-800">
            <tr>
                <th class="border border-gray-700 px-4 py-2">Name</th>
                <th class="border border-gray-700 px-4 py-2">Email</th>
                <th class="border border-gray-700 px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody class="bg-gray-900">
            @foreach($customers as $customer)
            <tr class="hover:bg-gray-800">
                <td class="border border-gray-700 px-4 py-2">{{ $customer->name }}</td>
                <td class="border border-gray-700 px-4 py-2">{{ $customer->email }}</td>
                <td class="border border-gray-700 px-4 py-2 flex flex-row gap-2">

                    <a class="text-blue-400 hover:text-blue-600" 
                       href="{{ route('customers.edit',$customer->id) }}">
                        Edit
                    </a>

                    <form action="{{ route('customers.destroy',$customer->id) }}" 
                          method="POST"
                          onsubmit="return confirm('Are you sure?');">
                        @csrf
                        @method('DELETE')

                        <button class="text-red-400 hover:text-red-600">
                            Delete
                        </button>
                    </form>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-6 text-gray-400">
        {{ $customers->links() }}
    </div>

</x-app-layout>
