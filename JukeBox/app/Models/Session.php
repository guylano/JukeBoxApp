<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    use HasFactory;
    
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
    public function EmptySongSession(){
        if(session()->has('song')){
            session(['song' => array()]);
        }

    }




}
