<x-layout>
    <x-slot:heading>
        Home Page
    </x-slot:heading>

    @foreach ($jobs as $job)
        <div class="p-4 mb-4 bg-white rounded shadow">
            <h2 class="text-xl font-bold">{{ $job['title'] }}</h2>
            <p class="text-gray-600">Company: {{ $job['company'] }}</p>
            <p class="text-gray-600">Location: {{ $job['location'] }}</p>
        </div>
    @endforeach
</x-layout>