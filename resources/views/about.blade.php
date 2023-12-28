<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('About') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <!-- Sources Section -->
                    <div class="mt-1">
                        <h3 class="text-lg font-semibold">Sources</h3>
                        <ul class="list-disc pl-5 mt-2">
                            @foreach ($sources as $source)
                                <li class="mt-1">
                                    <a href="{{ $source->url }}" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800 visited:text-purple-600">
                                        {{ $source->title }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

