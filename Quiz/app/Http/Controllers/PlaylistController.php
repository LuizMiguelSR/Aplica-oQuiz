<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Playlist;
use App\Models\Musica;

class PlaylistController extends Controller
{
    public function create()
    {
        return view('nova_playlist');
    }

    public function store(Request $request)
    {
        $dataPlaylist = $request->validate([
            'nome_playlist' => 'rquired|max:50',
        ]);
        foreach ($request->playlist_urls as $url) {
            $music = new Musica;
            $music->url_musica = $url;
            $music->playlist_id = $playlist->id;
            $music->save();
        }
    }
}
