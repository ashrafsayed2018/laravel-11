<x-layout>
    <x-slot:heading>
        <!-- get the path from the url -->
       edit job : {{$job ? $job['title'] : 'no title'}}
    </x-slot:heading>
    <form method="POST" action="/jobs/{{$job->id}}">
        @method('patch')
        @csrf
        <div class="space-y-12">
          <div class="border-b border-gray-900/10 pb-12">
            <h2 class="text-base font-semibold leading-7 text-gray-900">Edit Job information</h2>
            <p class="mt-1 text-sm leading-6 text-gray-600">Edit your job information</p>
      
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
              <div class="sm:col-span-4">
                <label for="title" class="block text-sm font-medium leading-6 text-gray-900">title</label>
                <div class="mt-2">
                  <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                    <input 
                    type="text" 
                    name="title" 
                    value="{{$job->title}}"
                    id="title" 
                    class="block flex-1 border-0 bg-transparent py-1.5 px-3 text-gray-900 placeholder:text-gray-600 focus:ring-0 sm:text-sm sm:leading-6" placeholder="your-job-title">
                  </div>
                </div>
                @error('title')
                    <p class="text-red-500 mt-1">{{$message}}</p>
                @enderror
              </div>
              <div class="sm:col-span-4">
                <label for="salary" class="block text-sm font-medium leading-6 text-gray-900">Salary</label>
                <div class="mt-2">
                  <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                    <input 
                    type="text" 
                    name="salary" 
                    value="{{$job->salary}}"
                    id="salary" 
                    class="block flex-1 border-0 bg-transparent py-1.5 px-3 text-gray-900 placeholder:text-gray-600 focus:ring-0 sm:text-sm sm:leading-6" placeholder="your-job-salary">
                  </div>
                  @error('salary')
                      <p class="text-red-500 mt-1">{{$message}}</p>
                  @enderror
                </div>
              </div>
              <div class="sm:col-span-4">
                <label for="location" class="block text-sm font-medium leading-6 text-gray-900">Location</label>
                <div class="mt-2">
                  <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                    <input 
                    type="text" 
                    name="location" 
                    value="{{$job->location}}"
                    id="location" autocomplete="location" class="block flex-1 border-0 bg-transparent py-1.5 px-3 text-gray-900 placeholder:text-gray-600 focus:ring-0 sm:text-sm sm:leading-6" placeholder="your-job-location">
                  </div>
                </div>
                @error('location')
                <p class="text-red-500 mt-1">{{$message}}</p>
                @enderror
              </div>
      
            </div>
           
          </div>
      
    
      

        </div>
      
        <div class="mt-6 flex items-center justify-end gap-x-6">
          <a href="/jobs" type="button" class="rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">Cancel</a>
          <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
        </div>
    </form>
</x-layout>