<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Playlist extends Model
{
    use HasFactory;

    public function Song()
    {
         return $this->hasMany('App\Models\Playlist_x_song', 'playlist_id', 'id');
        
        
    }
}
