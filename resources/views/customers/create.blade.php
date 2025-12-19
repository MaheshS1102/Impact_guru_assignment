<x-app-layout>

    <h2 class="text-2xl text-white mb-6">Add Customer</h2>

    <form method="POST" 
          action="{{ route('customers.store') }}" 
          class="space-y-4 w-1/2">

        @csrf

        <input name="name" placeholder="Name" 
               class="w-full border border-gray-600 bg-gray-900 text-white p-2 rounded" required>

        <input name="email" placeholder="Email" 
               class="w-full border border-gray-600 bg-gray-900 text-white p-2 rounded" required>

        <button class="px-4 py-2 bg-green-600 hover:bg-green-800 text-white rounded">
            Save
        </button>

    </form>

</x-app-layout>
