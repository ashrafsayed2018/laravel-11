<x-layout>
    <x-slot:heading>
        <!-- get the path from the url -->
       
        {{request()->path()}} 
    </x-slot:heading>
    <div class="space-y-4">
    @foreach ($jobs as $job) 
      
            <a href="/jobs/{{ $job['id'] }}" class="block py-4 px-6 bg-white p-4 rounded-lg">
             <div class="text-sm font-bold text-teal-500">{{$job->employer->name}}</div>
             <div>
             <strong>{{$job['title']}}</strong> pays {{$job['salary']}} per year
             </div>
             <div>Location : <span class="text-gray-500 font-bold">{{$job['location']}}</span></div>
            </a>
       
    @endforeach
    </div>
    <div>{{$jobs->links()}}</div>
</x-layout>