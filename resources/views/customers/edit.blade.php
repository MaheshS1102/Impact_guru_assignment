<x-app-layout>

    <h2 class="text-2xl text-white mb-6">Edit Customer</h2>

    <form method="POST" 
          action="{{ route('customers.update',$customer->id) }}" 
          class="space-y-4 w-1/2">

        @csrf
        @method('PUT')

        <input name="name" value="{{ $customer->name }}" 
               class="w-full border border-gray-600 bg-gray-900 text-white p-2 rounded">

        <input name="email" value="{{ $customer->email }}" 
               class="w-full border border-gray-600 bg-gray-900 text-white p-2 rounded">

        <button class="px-4 py-2 bg-blue-600 hover:bg-blue-800 text-white rounded">
            Update
        </button>

    </form>

</x-app-layout>
