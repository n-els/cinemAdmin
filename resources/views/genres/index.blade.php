<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Genres') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="font-bold text-lg">List of all registered Genres</h1>
                        <div class="mt-4">
                            <p>Below is a table displaying all the registered genres for the movies:</p>
                            <p>You have the ability to edit or delete any genre in the table.</p>
                        </div>

                        {{-- table of all genres with columns for id, name, created at --}}
                        <table class="mt-4 w-full">
                            <thead class="bg-slate-600">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Created At</th>
                                    <th>Manage</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @foreach ($genres as $genre)
                                <tr>
                                    <td>{{$genre->id}}</td>
                                    <td>{{$genre->name}}</td>
                                    <td>{{$genre->created_at}}</td>
                                    <td>edit | delete</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <a class="mt-8 block" href="{{ route('genres.create') }}">
                            <x-primary-button>Create a new genre</x-primary-button>
                        </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>