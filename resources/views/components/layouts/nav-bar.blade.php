<nav class="bg-gray-800 text-white py-3 px-4 flex items-center justify-between sticky top-0">
    <a class="text-xl font-bold tracking-tight">My Website</a>
    <div class="flex items-center">
        <a class="px-4 py-2 rounded-full hover:bg-gray-700" href="{{ route('about.index') }}">About</a>
        <a class="px-4 py-2 rounded-full hover:bg-gray-700" href="{{ route('artists.index') }}">Artists</a>
    </div>

    <div class="space-x-4">
        @guest
            <a route-name="register" href="{{ route('register') }}">Register</a>
            <a route-name="login" href="{{ route('login') }}">Login</a>
        @else
            <a route-name="profile.*" href="{{ route('profile.edit') }}">Profile</a>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="mx-2 py-4 px-2">Logout</button>
            </form>
        @endguest
    </div>
</nav>
