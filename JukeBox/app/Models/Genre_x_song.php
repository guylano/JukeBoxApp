<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre_x_song extends Model
{
    use HasFactory;
    public function Song()
    {
        return $this->hasOne('App\Models\Song', 'id', 'song_id');
    }
    public function Playlist()
    {
        return $this->hasOne('App\Models\Playlist', 'id', 'playlist_id');
    }
}
