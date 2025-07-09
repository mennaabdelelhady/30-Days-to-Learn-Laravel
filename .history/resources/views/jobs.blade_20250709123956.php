<x-layout>
    <x-slot:heading>
        Job Listing
    </x-slot:heading>

    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/">
                    <strong>{{ $job['title'] }}:</strong>At {{ $job['company'] }}
                </a>
            </li>
        @endforeach
    </ul>


</x-layout>
