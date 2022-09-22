<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Song;
use App\Models\Playlist_x_song;
use App\Models\Playlist;
use App\Models\Genre;
use App\Models\Genre_x_song;

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
            'rating' => 9,
        ]);
        Song::create([
            'name' => 'sultan',
            'time' => 00.51,
            'rating' => 4,
        ]);
        Playlist::create([
            'name' => 'favorieten',
            'user_id' => 1,
        ]);
        Playlist::create([
            'name' => 'mix1',
            'user_id' => 1,
        ]);
        Playlist::create([
            'name' => 'mix2',
            'user_id' => 1,
        ]);
        Playlist::create([
            'name' => 'mix3',
            'user_id' => 1,
        ]);
        Playlist_x_song::create([
            'playlist_id' => 1,
            'song_id' => 1,
        ]);
        Playlist_x_song::create([
            'playlist_id' => 1,
            'song_id' => 2,
        ]);
        Genre::create([
            'name' => 'pop',
        ]);
        Genre::create([
            'name' => 'rock'
        ]);
        Genre::create([
            'name' => 'jazz'
        ]);
        Genre::create([
            'name' => 'classic'
        ]);
        Genre::create([
            'name' => 'hardcore'
        ]);
        Genre::create([
            'name' => 'rap'
        ]);
        Genre_x_song::create([
            'genre_id' => 1,
            'song_id' => 1,
        ]);
        Genre_x_song::create([
            'genre_id' => 2,
            'song_id' => 2,
        ]);
        Genre_x_song::create([
            'genre_id' => 3,
            'song_id' => 1,
        ]);
        Genre_x_song::create([
            'genre_id' => 1,
            'song_id' => 2,
        ]);
    }
}
