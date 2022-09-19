<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Song;

class Genre extends Model
{
    use HasFactory;

    public function Song()
    {
         //return $this->hasMany('App\Models\Genre_x_song', 'genre_id', 'id');
        return $this->belongsToMany(Song::class, 'genre_x_songs');
        
    }
}
