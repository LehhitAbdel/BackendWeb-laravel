<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Customize your profile') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("upload an avatar and write about yourself") }}
        </p>
    </header>

    <form method="post" action="{{ route('profile.store') }}" enctype="multipart/form-data" class="mt-6 space-y-6">
        @csrf

        <div>
            <x-input-label for="avatar" :value="__('Avatar')" />
            <x-text-input id="avatar" name="avatar" type="file" class="mt-1 block w-full"/>
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="about_me" :value="__('About Yourself')" />
            <x-text-input id="about_me" name="about_me" class="mt-1 block w-full"/>
            <x-input-error class="mt-2" :messages="$errors->get('about_me')" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

        </div>
        
    </form>
</section>