<x-app-layout>
    <div class="max-w-4xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        @foreach ($categories as $category)
            <div class="mb-8">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">{{ $category->name }}</h2>
                @foreach ($category->faqs as $faq)
                    <div class="bg-white p-4 rounded-md shadow mb-4">
                        <h3 class="text-xl font-semibold text-gray-800">{{ $faq->question }}</h3>
                        <p class="text-gray-600">{{ $faq->answer }}</p>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
</x-app-layout>
