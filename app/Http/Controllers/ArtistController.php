<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArtistRequest;
use App\Http\Requests\UpdateArtistRequest;
use App\Models\Artist;
use App\Repositories\ArtistRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ArtistController extends Controller
{
    public function __construct(
        private ArtistRepository $artistRepository
    ) {}

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artists = $this->artistRepository->get();
        return view('artists.index', ['artists' => $artists]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        Gate::authorize('create', Artist::class);
        return view('artists.create');
    }

    public function createSong(Artist $artist) {
        Gate::authorize('update', $artist);
        return view('artists.create-song', [
            'artist' => $artist
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArtistRequest $request)
    {
        Gate::authorize('create', Artist::class);
        $request->validated();

        $name = $request->input('name');
        $file = $request->file('image');

        $fileName = time() . '-' . $file->getClientOriginalName();
        $path = $file->storeAs('artists', $fileName, 'public');

        $artist = $this->artistRepository->create(['name' => $name, 'image_path' => $path]);
        return redirect()->route('artists.show', ['artist' => $artist]);
    }

    public function storeSong(Request $request, Artist $artist) {
        Gate::authorize('update', $artist);
        $title = $request->get('title');
        $duration = $request->get('duration');
        if ($title === null || $duration === null) {
            return redirect()->back;
        }
        $this->artistRepository->addSong($artist, [
            'title' => $title,
            'duration' => $duration,
        ]);
        return redirect()->route('artists.show', ['artist' => $artist]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Artist $artist)
    {
        return view('artists.show', ['artist' => $artist]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Artist $artist)
    {
        Gate::authorize('update', $artist);
        return view('artists.edit', [
            'artist' => $artist
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateArtistRequest $request, Artist $artist)
    {
        Gate::authorize('update', $artist);
        $artist_name = $request->get('name');
        if ($artist_name === null) {
            return redirect()->back();
        }
        if ($this->artistRepository->isExists($artist_name, $artist->id)) {
            return redirect()->back();
        }
        $this->artistRepository->update([
            'name' => $artist_name
        ], $artist->id);
        return redirect()->route('artists.show', ['artist' => $artist]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Artist $artist)
    {
        Gate::authorize('delete', $artist);
        if ($artist->songs->isEmpty()) {
            $this->artistRepository->delete($artist->id);
            return redirect()->route('artists.index');
        }
        return redirect()->back();
    }

    public function artistImage() : Attribute
    {
        $url = "/storage/images/default-artist.png";

        if (Str::startsWith($this->image_path, 'http')) {
            $url = $this->image_path;
        } else if (!empty($this->image_path)) {
            $url = Storage::url($this->image_path);
        }


        return Attribute::make(
            get: fn () => $url
        );
    }
}
