<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Song;
use App\Models\Playlist_x_song;
use App\Models\Playlist;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Song::create([
            'name' => 'sayah',
            'time' => 03.15,
        ]);
        Song::create([
            'name' => 'sultan',
            'time' => 00.51,
        ]);
        Playlist::create([
            'name' => 'favorieten',
        ]);
        Playlist_x_song::create([
            'playlist_id' => 1,
            'song_id' => 1,
        ]);
        Playlist_x_song::create([
            'playlist_id' => 1,
            'song_id' => 2,
        ]);
    }
}
