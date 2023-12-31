<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('News Posts') }}
            </h2>
    
            @if(auth()->check() && auth()->user()->is_admin)
                <a href="{{ url('/news/create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Create News Post
                </a>
            @endif
        </div>
    </x-slot>
   
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                  
                    <!-- Display all news posts in a grid -->
                    <div class="grid md:grid-cols-2 gap-4">
                        @foreach ($newsPosts as $post)
                            <div class="border border-gray-200 rounded-lg p-4">
                                <h2 class="font-bold text-center">{{ $post->title }}</h2>
                                <img src="{{asset('Storage/' . $post->cover_image) }}" alt="Cover_Image" class="object-cover w-50 h-34">
                                <div>{{ $post->content }}</div>
                                <small>Published on: {{ $post->published_at }}</small>
                                <p>Posted by: <a href="{{ route('user.profile', $post->user->id) }}" class="font-bold underline">{{ $post->user->name }}</a></p>
                               
                                <div class="flex justify-between items-center mt-4">
                                    @if(auth()->check() && auth()->user()->is_admin)
                                        <!-- Edit button -->
                                        <a href="{{ route('news.edit', $post->id) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                                            Edit
                                        </a>
                        
                                        <!-- Delete button -->
                                        <form action="{{ route('news.destroy', $post->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                                Delete
                                            </button>
                                        </form>
                                    @endif
                                </div>
                            </div>

                        @endforeach
                    </div>

    
                    <!-- Pagination links -->
                    <div class="mt-4">
                        {{ $newsPosts->links() }}
                    </div>
                </div>    
            </div>    
        </div>    
    </div>
    

</x-app-layout>
