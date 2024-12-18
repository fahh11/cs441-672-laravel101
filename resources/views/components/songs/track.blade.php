{{--<div>--}}
{{--    Song Track here....--}}
{{--    {{ $slot }}--}}
{{--    <p>Title: {{ $song['title'] }}</p>--}}
{{--    <p>Album: {{ $songAlbumName }}</p>--}}
{{--</div>--}}

<li class="flex items-center py-4 px-6 hover:bg-gray-50">
                    <span class="text-gray-700 text-lg font-medium mr-4">
                        {{ $song['id'] }}.
                    </span>
    <img class="w-24 h-24 mr-4" src="{{ $song['image'] }}">
    <div class="flex-1">
        <h3 class="text-lg font-medium text-gray-800">
            {{ $song['title'] }}
        </h3>
        <p class="text-gray-600 text-base">
            {{ $song['artist'] }}
        </p>
        <a href="{{ $song['link'] }}" target="_blank" class="text-blue-500 hover:underline">Music Video: {{ $song['title'] }}</a>
    </div>
    <span class="text-gray-400">
                        {{ $song['duration']['minutes'] }}:{{ $song['duration']['seconds'] }}
                    </span>
</li>
