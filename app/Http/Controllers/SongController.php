<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SongController extends Controller
{
    public function index()
    {
        $songs = collect([
            [
                'id' => 1,
                'title' => 'Farewell, Neverland',
                'artist' => 'TXT',
                'album' => 'Temptation',
                'image' => url('/images/pic1.png'),
                'link' => 'https://youtu.be/aM-B6rlnwIw?feature=shared',
                'duration' => [
                    'minutes' => 3,
                    'seconds' => 34
                ],
            ],
            [
                'id' => 2,
                'title' => 'Opening Sequence',
                'artist' => 'TXT',
                'album' => "Thursday's child",
                'image' => url('/images/pic2.png'),
                'link' => 'https://youtu.be/aM-B6rlnwIw?feature=shared',
                'duration' => [
                    'minutes' => 2,
                    'seconds' => 57
                ],
            ],
            [
                'id' => 3,
                'title' => "Rock with you",
                'artist' => 'Seventeen',
                'album' => 'attacca',
                'image' => url('/images/pic3.png'),
                'link' => 'https://youtu.be/aM-B6rlnwIw?feature=shared',
                'duration' => [
                    'minutes' => 3,
                    'seconds' => 11
                ],
            ],
            [
                'id' => 4,
                'title' => "DRIP",
                'artist' => 'Babymonster',
                'album' => 'DRIP',
                'image' => url('/images/pic4.png'),
                'link' => 'https://youtu.be/aM-B6rlnwIw?feature=shared',
                'duration' => [
                    'minutes' => 3,
                    'seconds' => 56
                ],
            ],
            [
                'id' => 5,
                'title' => "I'm fine",
                'artist' => 'BTS',
                'album' => 'Love Yourself',
                'image' => url('/images/pic5.png'),
                'link' => 'https://youtu.be/aM-B6rlnwIw?feature=shared',
                'duration' => [
                    'minutes' => 3,
                    'seconds' => 48
                ],
            ],
            [
                'id' => 6,
                'title' => 'Shout Out',
                'artist' => 'Enhypen',
                'album' => 'Manifesto',
                'image' => url('/images/pic6.png'),
                'link' => 'https://youtu.be/aM-B6rlnwIw?feature=shared',
                'duration' => [
                    'minutes' => 3,
                    'seconds' => 33
                ],
            ],
            [
                'id' => 7,
                'title' => 'Deja vu',
                'artist' => 'TXT',
                'album' => 'Tomorrow',
                'image' => url('/images/pic7.png'),
                'link' => 'https://youtu.be/aM-B6rlnwIw?feature=shared',
                'duration' => [
                    'minutes' => 3,
                    'seconds' => 48
                ],
            ],
        ]);

        return view('songs.index', [
            'title' => 'Song Playlist',
            'songs' => $songs
        ]);
    }
}
