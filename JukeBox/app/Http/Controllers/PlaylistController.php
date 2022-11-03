<?php

namespace App\Http\Controllers;

use App\Models\Playlist;
use App\Models\Song;
use App\Models\Playlist_x_song;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Collective\Html\FormFacade as Form;
use App\Models\Session;


class PlaylistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $playlist= Playlist::where('name', '!=', null)->get();
        
        return view('playlist.index', ['playlist'=>$playlist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $playlist= array();
        $song = array();
        $session = new Session;
        $songs = $session->GetPlaylistSession();
        $totaltime=0;
        
        foreach($songs as $s){
            $totaltime=$totaltime+$s->time;
            $song[] = processTime($s);
        }
        $time= processTime($totaltime);
        return view('playlist.create', ['time'=>$time, 'songs' =>$song]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $playlist = new Playlist;
        $playlist->name = $request->get('pname');
        $playlist->user_id = Auth::user()->id;
        $playlist->save();
        $playlist->song()->attach(session('song'));
        $playlist->save();

        $session = new Session();
        $session->EmptySongSession();
       

        return redirect()->route('playlist.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Playlist  $playlist
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $songs = array();
        $playlist = Playlist::where('id',$id)->first();
        $playlist->time_s = 0;
        $playlist->time_m = 0;
        foreach($playlist->Song as $song){
            $playlist->time = $playlist->time + $song->time;
            
        }
        $playlist=processTime($playlist);
        foreach($playlist->Song as $s){
            $songs[] = processTime($s);
        }
        
        return view('playlist.show',['playlist'=>$playlist, 'songs'=>$songs]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Playlist  $playlist
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $playlist = Playlist::where('id',$id)->first();
        $songs = Song::all();
        $cSongs = array();
        foreach($playlist->Song as $s){
            $cSongs[] = $s->id;
        }
        
        return view('playlist.edit',['playlist' => $playlist, 'aSongs' => $songs, 'cSongs' =>$cSongs]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Playlist  $playlist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->get('id');

        
        $playlist = Playlist::where('id',$id)->first();
        Playlist_x_song::where('playlist_id', $id)->delete();
        if($playlist == null){
            die('playlist = null');
        }
        $playlist->name = $request->get('pname');

        if(is_array($request->get('songs'))){
            $playlist->song()->attach($request->get('songs'));
        }
        $playlist->update();

        $session = new Session();
        $session->EmptySongSession();
        return redirect()->route('playlist.show', ['id'=>$id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Playlist  $playlist
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $playlist = Playlist::where('id',$id)->first();

        return view('playlist.delete',['playlist'=>$playlist]);
    }



    public function destroy($id=null)
    {
        if($id!=null){
            Playlist::where('id', $id)->delete();
            Playlist_x_song::where('playlist_id', $id)->delete();
            return redirect()->route('playlist.index');
        }else{
            return redirect()->route('playlist.show', ['id'=>$id]);
        }
    }

    public function remove($id_1=null, $id_2=null, $type=null)
    {
        if($type=='song'){
            print('songg'. $id_1. $id_2);
            $pxs = Playlist_x_song::where('playlist_id', $id_1 )->where('song_id', $id_2)->delete();
        }
        return redirect()->route('playlist.show',['id'=>$id_1]);
    }




}
