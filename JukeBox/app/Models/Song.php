<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;
    public function Playlist()
    {
        return $this->hasMany('App\Models\Playlist_x_song', 'song_id', 'id');
    }
    public function Genre()
    {
        return $this->hasMany('App\Models\Genre_x_song', 'song_id', 'id');
    }
}
