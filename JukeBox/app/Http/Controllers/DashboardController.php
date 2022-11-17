<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Playlist;
use App\Models\Song;
use App\Models\Genre;


class DashboardController extends Controller
{
    //base page 
    public function index()
    {
        $playlists = Playlist::all('name')->take(3);
        $genres = Genre::all('name')->take(3);
        $recommended = Song::orderBy('rating', 'desc')->take(3)->get('name');
        
        return view('dashboard', ['playlists'=>$playlists, 'genres'=>$genres, 'recommended'=>$recommended]);
    }
}
