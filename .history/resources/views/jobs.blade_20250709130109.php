<x-layout>
    <x-slot:heading>
        Job Listing
    </x-slot:heading>

    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/{{$job['id']}}" class="text-blue-500 hover:underline">
                    <strong>{{ $job['title'] }}:</strong>At {{ $job['company'] }}
                </a>
            </li>
        @endforeach
    </ul>


</x-layout>
