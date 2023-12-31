<x-app-layout>
    <div class="max-w-2xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <h1 class="text-xl font-semibold text-gray-800 dark:text-gray-200 leading-tight">Edit FAQ Category</h1>

        <form method="POST" action="{{ route('faq-categories.update', $faqCategory->id) }}" class="mt-5 md:mt-0 md:col-span-2">
            @csrf
            @method('PUT')
            <div class="shadow overflow-hidden sm:rounded-md">
                <div class="px-4 py-5 bg-white sm:p-6">
                    <label for="name" class="block text-sm font-medium text-gray-700">Category Name:</label>
                    <input type="text" name="name" id="name" value="{{ $faqCategory->name }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                    <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Update
                    </button>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>
