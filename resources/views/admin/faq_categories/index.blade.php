<x-app-layout>
    <div class="max-w-4xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <h1 class="text-2xl font-semibold text-gray-800 mb-4">FAQ Categories</h1>

        <a href="{{ route('faq-categories.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4 inline-block">
            Create New Category
        </a>

        @foreach ($categories as $category)
            <div class="bg-white p-4 rounded-md shadow mb-4">
                <h2 class="text-xl font-semibold text-gray-800">{{ $category->name }}</h2>
                <div class="flex items-center mt-2">
                    <a href="{{ route('faq-categories.edit', $category->id) }}" class="bg-green-500 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded mr-2 text-sm">
                        Edit
                    </a>
                    <form method="POST" action="{{ route('faq-categories.destroy', $category->id) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded text-sm">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
</x-app-layout>
