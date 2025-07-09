<x-layout>
    <x-slot:heading>
        Home Page
    </x-slot:heading>

    @foreach ($jobs as $job)
    <li>{{$job['title']}}:Pays {{ $job['company']}}</li>
    @endforeach
</x-layout>