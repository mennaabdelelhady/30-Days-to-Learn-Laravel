<x-layout>
    <x-slot:heading>
        Job Listing
    </x-slot:heading>
   <h2 class="font-bold text-lg">{{$job['title']}}</h2>
   <p>
    This job located at {{$job['location']}} is offered by {{$job['company']}}.
   </p>

</x-layout>
