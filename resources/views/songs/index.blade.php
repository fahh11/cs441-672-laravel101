<x-layouts.main>
    <div class="bg-white shadow-md rounded-md  mx-10 mt-16 mb-10">
        <div class="bg-pink-100 py-2 px-4">
            <h2 class="text-xl font-semibold text-gray-800">
                {{ $title }}
            </h2>
        </div>
        <ul class="divide-y divide-gray-200">
            @foreach ($songs as $song)
                <x-songs.track :song="$song"></x-songs.track>
            @endforeach
        </ul>
    </div>
</x-layouts.main>
