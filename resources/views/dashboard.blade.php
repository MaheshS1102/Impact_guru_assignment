<x-app-layout>
    <x-slot name="header">
        <h2>Dashboard</h2>
    </x-slot>

    <div>
        <p>Welcome {{ auth()->user()->name }}</p>
        <a href="/customers">Customers</a>
    </div>

</x-app-layout>
