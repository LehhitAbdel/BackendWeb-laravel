<x-app-layout>
    <div class="max-w-4xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <h1 class="text-2xl font-semibold text-gray-800 mb-4">FAQs</h1>

        <a href="{{ route('faqs.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4 inline-block">
            Create New FAQ
        </a>

        @foreach ($faqs as $faq)
            <div class="bg-white p-4 rounded-md shadow mb-4">
                <h2 class="text-xl font-semibold text-gray-800">{{ $faq->question }}</h2>
                <p class="text-gray-600">{{ $faq->answer }}</p>
                <div class="flex items-center mt-2">
                    <a href="{{ route('faqs.edit', $faq->id) }}" class="text-indigo-600 hover:text-indigo-900 font-medium mr-4">
                        Edit
                    </a>
                    <form method="POST" action="{{ route('faqs.destroy', $faq->id) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 hover:text-red-900 font-medium">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
</x-app-layout>
