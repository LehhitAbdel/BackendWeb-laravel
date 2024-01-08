<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('FAQ') }}
        </h2>
        @if(auth()->check() && auth()->user()->is_admin)
        <a href="{{ url('/faqs/create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Create FAQ
        </a>
        @endif
    </div>
    </x-slot>

    <div class="max-w-4xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        @foreach ($categories as $category)
        <h2 class="text-center text-2xl font-bold text-gray-800 uppercase tracking-wider mb-4">{{ $category->name }}</h2>

        @foreach ($category->faqs as $faq)
            <div class="flex justify-between items-center bg-white p-4 rounded-md shadow mb-4">
                <div>
                    <h3 class="text-xl font-semibold text-gray-800">{{ $faq->question }}</h3>
                    <p class="text-gray-600">{{ $faq->answer }}</p>
                </div>

            @if(auth()->user() && auth()->user()->is_admin)
                <div class="flex items-center">
                    <a href="{{ route('faqs.edit', $faq->id) }}" class="bg-green-500 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded mr-2 text-sm">
                        Edit
                    </a>
                    <form method="POST" action="{{ route('faqs.destroy', $faq->id) }}" onsubmit="return confirm('Are you sure you want to delete this?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded text-sm">
                            Delete
                        </button>
                    </form>
                </div>
            @endif
            </div>
    @endforeach
@endforeach

    </div>
</x-app-layout>
