<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\song;

class songController extends Controller
{
    public function getSong($id)
    {
        $song =song::find($id);
        return view('song',['song'=> $song]);
    }
   /* public function show($id)
    {
        return view('user.profile', [
            'user' => User::findOrFail($id)
        ]);
    }*/
}