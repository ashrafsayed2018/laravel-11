<x-layout>
    <x-slot:heading>
        <!-- get the path from the url -->
       
        {{request()->path()}} 
    </x-slot:heading>
    <ul>
    @foreach ($jobs as $job) 
        <li>
            <a href="/jobs/{{ $job['id'] }}">
            <strong>{{$job['title']}}</strong> pays {{$job['salary']}} per year
            </a>
        </li>
    @endforeach
    </ul>
</x-layout>