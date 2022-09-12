<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;
    public function Playlist()
    {
        return $this->hasMany('App\Models\playlist_x_song', 'song_id', 'id');
    }
}
