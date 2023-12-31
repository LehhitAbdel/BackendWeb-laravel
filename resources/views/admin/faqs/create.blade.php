<x-app-layout>
    <div class="max-w-4xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <h1 class="text-2xl font-semibold text-gray-800 mb-4">Create FAQ</h1>

        <form method="POST" action="{{ route('faqs.store') }}" class="mt-5 bg-white shadow rounded-md p-6">
            @csrf
            <div class="mb-4">
                <label for="faq_category_id" class="block text-sm font-medium text-gray-700 mb-2">Category:</label>
                <select name="faq_category_id" id="faq_category_id" class="block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label for="question" class="block text-sm font-medium text-gray-700 mb-2">Question:</label>
                <input type="text" name="question" id="question" class="block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

            <div class="mb-4">
                <label for="answer" class="block text-sm font-medium text-gray-700 mb-2">Answer:</label>
                <textarea name="answer" id="answer" class="block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"></textarea>
            </div>

            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Create
            </button>
        </form>
    </div>
</x-app-layout>
