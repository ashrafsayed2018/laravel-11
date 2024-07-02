<x-layout>
    <x-slot:heading>
        <!-- get the path from the url -->
        {{request()->path()}} 
    </x-slot:heading>
    <form method="POST" action="/login">
        @csrf
        <div class="space-y-12">
          <div class="border-b border-gray-900/10 pb-12">
            <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
              <x-form-field>
                <x-form-label for="email" >Email</x-form-label>
                  <x-form-input type="text" name="email" id="email" placeholder="your email" />
                  <x-form-error name="email"/>
              </x-form-field>
              <x-form-field>
                  <x-form-label :for="'password'" >Password</x-form-label>
                  <x-form-input type="password" name="password" id="password" placeholder="your-job-password" />
                  <x-form-error name="password"/>
              </x-form-field>
            </div>
          </div>
        </div>
        <div class="mt-6 flex items-center justify-end gap-x-6">
          <x-cancel-button href="/register">not registered? Register</x-cancel-button>
          <x-form-button>Login</x-form-button>
        </div>
    </form>
</x-layout>