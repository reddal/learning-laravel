<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\song;
use Illuminate\Http\Request;
use App\Http\Controllers\Storage;
use Illuminate\Support\Facades\Storage as FacadesStorage;

class songController extends Controller
{
    public function getSong($id)
    {
        $song = song::find($id);
        return view('song', ['song' => $song]);
    }
    /* public function show($id)
    {
        return view('user.profile', [
            'user' => User::findOrFail($id)
        ]);
    }*/

    public function insertSong(Request $request,  FacadesStorage $storage)
    {
        $newSong = new Song();

        $newSong->name = $request->name;
        $newSong->dur = $request->dur;
        $newSong->path = $this->uploadFile($request, $storage);
        $newSong->user_id = 1;

        $newSong->save();

        return view('audio',['newSong'=> $newSong]);
    }

    public function uploadFile(
        $request,
        $storage
    ) {
        $file = $request->file('audio');



        $newFilename =  uniqid(rand(), true) . '.' . $file->getClientOriginalExtension();
        $storage::disk('public')->put($newFilename, file_get_contents($file));

        // $example = $storage::disk('local')->get($newFilename);

        $path = $storage::url($newFilename);
        //var_dump($storage::url($newFilename));
        //die();
        return $path;
    }
}
