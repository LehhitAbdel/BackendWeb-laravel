
<x-app-layout>
    <div class="max-w-2xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <!-- Create form for news post -->
        <form method="POST" action="{{ url('news') }}" enctype="multipart/form-data" class="mt-5 md:mt-0 md:col-span-2">
            @csrf
            <div class="shadow overflow-hidden sm:rounded-md">
                <div class="px-4 py-5 bg-white sm:p-6">
                    <div class="grid grid-cols-6 gap-6">
                        <!-- Title -->
                        <div class="col-span-6 sm:col-span-3">
                            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                            <input type="text" name="title" id="title" placeholder="Title" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <!-- Cover Image -->
                        <div class="col-span-6 sm:col-span-3">
                            <label for="cover_image" class="block text-sm font-medium text-gray-700">Cover Image</label>
                            <input type="file" name="cover_image" id="cover_image" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <!-- Content -->
                        <div class="col-span-6">
                            <label for="content" class="block text-sm font-medium text-gray-700">Content</label>
                            <textarea name="content" id="content" placeholder="Content" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
                        </div>
                    </div>
                </div>
                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                    <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Submit
                    </button>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>

