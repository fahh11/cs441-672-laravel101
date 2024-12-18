<x-layouts.main>
    <div class="flex justify-center mt-32">
        <div class="flex items-center bg-gray-800 rounded-xl shadow-2xl py-14 px-20">
            <div class="text-center mr-12">
                <img class="object-cover rounded-full w-48 h-48 mx-auto mb-4 border-4 border-green-300" src="{{ url('/images/profile.jpg') }}">
                <h1 class="text-xl font-bold text-white mb-2">Phaptawan Sukhum</h1>
                <p class="text-gray-300">CS Student</p>
                <a href="{{ route('songs.index') }}" class="bg-green-300 text-gray-900 rounded-lg hover:bg-green-800 px-4 py-2 mt-4 inline-block">
                    Go to My Playlist
                </a>

            </div>
            <div class="flex flex-col w-80">
                <h2 class="text-xl font-bold text-white mb-2">About Me</h2>
                <p class="text-gray-300">
                    I am a third-year student in the Faculty of Science,
                    Department of Computer Science.
                </p>
                <h2 class="text-xl font-bold text-white mt-5 mb-2">Contact Information</h2>
                <ul class="space-y-2 text-gray-300 list-disc list-inside">
                    <li>phaptawan.su@ku.th</li>
                    <li>0123456789</li>
                    <li>Pathum Thani, Bangkok</li>
                </ul>
            </div>
        </div>
    </div>
</x-layouts.main>
