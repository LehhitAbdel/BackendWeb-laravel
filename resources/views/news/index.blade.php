<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('News Posts') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                        <!-- Display all news posts -->
                    @foreach ($newsPosts as $post)
                    <div>
                        <h2>{{ $post->title }}</h2>
                        <img src="{{ $post->cover_image }}" alt="Cover Image">
                        <div>{{ $post->content }}</div>
                        <small>Published on: {{ $post->published_at}}</small>
                        <p>Posted by: <a href="{{ route('user.profile', $post->user->id) }}" class="font-bold underline">{{ $post->user->name }}</a></p>
                    </div>
                    @endforeach

                    {{ $newsPosts->links() }} <!-- Pagination links -->
                </div>    
            </div>    
        </div>    
    </div>    

</x-app-layout>
