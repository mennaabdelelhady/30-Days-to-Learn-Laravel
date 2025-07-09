<x-layout>
    <x-slot:heading>
        Home Page
    </x-slot:heading>

    @foreach ($jobs as $job)
    <li>{{$job['title']}}</li>
    @endforeach
</x-layout>