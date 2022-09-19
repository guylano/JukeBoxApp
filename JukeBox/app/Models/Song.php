<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Playlist;
use App\Models\Genre;

class Song extends Model
{
    use HasFactory;
    public function Playlist()
    {
        //return $this->hasMany('App\Models\Playlist_x_song', 'song_id', 'id');
        return $this->belongsToMany(Playlist::class, 'playlist_x_songs');
    }
    public function Genre()
    {
        //return $this->hasMany('App\Models\Genre_x_song', 'song_id', 'id');
        return $this->belongsToMany(Genre::class, 'genre_x_songs');
    }



}
