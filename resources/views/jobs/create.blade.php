<x-layout>
    <x-slot:heading>
        <!-- get the path from the url -->
        {{request()->path()}} 
    </x-slot:heading>
    <form method="POST" action="/jobs">
        @csrf
        <div class="space-y-12">
          <div class="border-b border-gray-900/10 pb-12">
            <h2 class="text-base font-semibold leading-7 text-gray-900">Job information</h2>
            <p class="mt-1 text-sm leading-6 text-gray-600">Fill in your job information</p>
      
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
              <x-form-field>
                <x-form-label for="title" >Title</x-form-label>
                <x-form-input type="text" name="title" id="title" placeholder="your-job-title" />
                <x-form-error name="title"/>
              </x-form-field>
              <x-form-field>
                <x-form-label for="salary" >Salary</x-form-label>
                  <x-form-input type="text" name="salary" id="salary" placeholder="your-job-salary" />
                  <x-form-error name="salary"/>
              </x-form-field>
              <x-form-field>
                  <x-form-label :for="'location'" >Location</x-form-label>
                  <x-form-input type="text" name="location" id="location" placeholder="your-job-location" />
                  <x-form-error name="location"/>
              </x-form-field>
            </div>
          </div>
        </div>
      
        <div class="mt-6 flex items-center justify-end gap-x-6">
          <x-cancel-button href="/jobs">Cancel</x-cancel-button>
          <x-form-button>Save</x-form-button>
        </div>
    </form>
</x-layout>