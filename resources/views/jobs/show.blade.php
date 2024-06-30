<x-layout>
    <x-slot:heading>
        <!-- get the path from the url -->
        {{request()->path()}} 
    </x-slot:heading>
    <h1>{{$job ? $job->title : 'no title'}}</h1>
    <p class="my-3 text-sm leading-6 text-gray-900">pays $<strong>{{$job->salary}}  </strong> per month and is located in  <strong>{{$job->location}}</strong></p>
    <a href="/jobs/{{$job->id}}/edit" type="button" class="rounded-md bg-green-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-green-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-600">Edit Job</a>

    <button form="delete-job" class="rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">Delete Job</button>
        <form action="/jobs/{{$job->id}}" method="POST" class="hidden" id="delete-job">
            @csrf
            @method('delete')
            <button type="submit">Delete</button>
        </form>
</x-layout>