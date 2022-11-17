<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Song;

class Session extends Model
{
    use HasFactory;
    //creates a playlist with the songs that are currently in the session
    public function GetPlaylistSession(){
        $playlist = array();
        if(session()->has('song')){
            foreach(session('song') as $id){
                $playlist[] = Song::where('id', $id)->first();            

            }
        }
        return($playlist);
    }
    //adds a song to the song session
    public function AddSongSession($id){
        if(!session()->has('song')){

            $songs = array();
        }else{

            $songs = session('song');
        }
        if(!in_array($id, $songs)){
            $songs[] = $id;
        }else{
            //remove from session
            $key = array_search($id, $songs);
            unset($songs[$key]); 


        }
        session(['song' => $songs]);

    }

    //empties song session
    public function EmptySongSession(){
        if(session()->has('song')){
            session(['song' => array()]);
        }

    }




}
