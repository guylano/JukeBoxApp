<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Song;


class Playlist extends Model
{
    use HasFactory;

    public function Song()
    {
         //return $this->hasMany('App\Models\Playlist_x_song', 'playlist_id', 'id');
        return $this->belongsToMany(Song::class, 'playlist_x_songs');
        
    }
}
