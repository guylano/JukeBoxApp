<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Playlist extends Model
{
    use HasFactory;

    public function Song()
    {
        $x = $this->hasMany('App\Models\playlist_x_song', 'playlist_id', 'id');
        dd($x);
        return $x->Song();
    }
}
