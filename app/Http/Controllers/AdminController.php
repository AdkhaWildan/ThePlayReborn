<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Games;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        if(Auth::id())
        {
            $usertype=Auth()->user()->usertype;

            if($usertype=='user')
            {
                    return view('dashboard');
            }

            else if($usertype=='admin')
            {
                    return view('admin.admindashboard');
            } 

            else 
            {
                return redirect()->back();
            }
        }
    }

    public function create()
    {
        return view('admin.adminpost');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'image' => ['required', 'image', 'mimes:jpeg,jpg,png' ,'max:2048'],
            'gamename' => ['required', 'string', 'max:255'],
            'developer' => ['required', 'string', 'max:255'],
            'publisher' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'releasedate' => ['required', 'date', 'max:255'],
            'price' => ['required', 'integer', 'max:255'],
            
        ]);
        
        
        $game = new Games;
        $game->gamename = $request->input('gamename');
        $game->developer = $request->input('developer');
        $game->publisher = $request->input('publisher');
        $game->description = $request->input('description');
        $game->releasedate = $request->input('releasedate');
        $game->price = $request->input('price');
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('images/', $filename);
            $game->image = $filename;
        }
        $game->save();
        return redirect()->back()->with('status', 'Game Image Added Successfully');
        // return view('admin.adminpost');
    }
}