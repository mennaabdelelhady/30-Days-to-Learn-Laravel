<x-layout>
    <x-slot:heading>
        Job Listing
    </x-slot:heading>

    <ul>
        @foreach ($jobs as $job)
            <li><strong>{{ $job['title'] }}:</strong>At {{ $job['company'] }}</li>
        @endforeach
    </ul>


</x-layout>
