<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Genre') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="font-bold">Create a Genre</h1>
                    <p>
                        Fill in the form below, then click <strong>Create Genre</strong> to create a new genre.
                    </p>

                    <form class="mt-4" method="POST" action="{{ route('genres.store') }}">
                        @csrf

                        <!-- Name -->
                        <div>
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                                :value="old('name')" required autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
                        <x-primary-button class="mt-4">
                            {{ __('Create Genre') }}
                        </x-primary-button>
                        <a href="{{url()->previous()}}">
                            <x-secondary-button>cancel</x-secondary-button>
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>