<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="grid grid-cols-1 gap-5 sm:grid-cols-2">
                        <a class="p-4 rounded-lg bg-gradient-to-br from-slate-500 to-slate-800 hover:bg-gradient-to-r text-gray-100"
                            href="{{ route('genres.index') }}">
                            <div>
                                <h3 class="font-bold text-xl">Movies</h3>
                                <p>Add, edit and delete Movies</p>
                            </div>
                        </a>
                        <a class="p-4 rounded-lg bg-gradient-to-br from-slate-500 to-slate-800 hover:bg-gradient-to-r text-gray-100"
                            href="{{ route('genres.index') }}">
                            <div>
                                <h3 class="font-bold text-xl">Genres</h3>
                                <p>Manage the available genres for the movies</p>
                            </div>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>