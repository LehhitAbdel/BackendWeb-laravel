<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    
                    <div class="container mx-auto p-6 bg-white shadow-lg rounded-lg">
                        <div class="text-center">
                            <h1 class="text-3xl font-semibold text-gray-800">{{ $user->name }}</h1>
                            <p class="text-md text-gray-600">Birthday: {{ $user->birthday->format('F d, Y') }}</p>
                        </div>
                    
                       <div class="flex justify-center my-6">
                            @if ($user->avatar)
                                <img src="{{ asset('storage/' . $user->avatar) }}" alt="Avatar" class="rounded-full h-32 w-32 object-cover">
                            @endif
                        </div>
                    
                        <div class="px-6 py-4">
                            <p class="text-gray-700 text-base">
                                About Me: {{ $user->about_me }}
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>




    

