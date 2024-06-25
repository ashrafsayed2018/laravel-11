<x-layout>
    <x-slot:heading>
        <!-- get the path from the url -->
       
        {{request()->path()}} 
    </x-slot:heading>
    <h1>this is job page</h1>
    <p>{{$job ? $job['title'] : 'no title'}}</p>
</x-layout>