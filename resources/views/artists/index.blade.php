<x-layouts.main>
    <div class="bg-white shadow-md rounded-md overflow-hidden max-w-lg mx-auto mt-16">
        <div class="bg-pink-100 py-2 px-4 flex justify-between">
            <h2 class="text-xl font-semibold text-gray-800">Artist List</h2>
            @can('create', \App\Models\Artist::class)
                <a class="inline-block py-2 px-4 border border-gray-700 hover:bg-green-400"
                   href="{{ route('artists.create') }}">
                    Create New Artist
                </a>
            @endcan
        </div>

        <ul class="divide-y divide-gray-200">
            @foreach ($artists as $artist)
                <li class="flex items-center py-4 px-6 hover:bg-gray-50">
                    <span class="text-gray-700 text-lg font-medium mr-4">
                        {{ $loop->iteration }}.
                    </span>
                    <div class="flex">
                        <img src="{{ Storage::url($artist->image_path) }}">
                        <a href="{{ route('artists.show', ['artist' => $artist]) }}">
                            <p class="text-lg font-medium text-gray-800">
                                {{ $artist->name }}
                            </p>
                        </a>
                    </div>
                    <span class="text-gray-400"></span>
                </li>
            @endforeach
        </ul>

        <div>
            {{ $artists->links() }}
        </div>
    </div>
</x-layouts.main>
