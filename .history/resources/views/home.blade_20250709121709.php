<x-layout>
    <x-slot:heading>
        Home Page
    </x-slot:heading>

    @foreach ($jobs as $job)
    <li><strong>{{$job['title']}}:</strong>At {{ $job['company']}}</li>
    @endforeach
</x-layout>