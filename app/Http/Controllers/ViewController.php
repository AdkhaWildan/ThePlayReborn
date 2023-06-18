<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Games;
use App\Models\User;

class ViewController extends Controller
{
    function show(){
        $data = Games::all();
        return view('store',compact('data'));
    }

    public function details($gameid)
{
    $data = Games::find($gameid);
    return view('details', compact('data'));
}
}