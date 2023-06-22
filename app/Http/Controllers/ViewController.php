<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Games;
use App\Models\UserGame;
use App\Models\User;

class ViewController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function info()
    {
        return view('about');
    }

    
    
    function show(){
        $data = Games::all();
        return view('store',compact('data'));
    }

    public function details($gameid)
    {
        $data = Games::find($gameid);
        return view('details', compact('data'));
    }

    public function buy(Request $request, $gameid)
    {
        if (auth()->check()) {
            // Pengguna telah login, lanjutkan proses pembelian game
            $userId = auth()->user()->id;

            // Memeriksa apakah pengguna telah membeli game tersebut sebelumnya
            $existingPurchase = UserGame::where('userid', $userId)->where('gameid', $gameid)->first();

            if ($existingPurchase) {
                // Jika pengguna telah membeli game tersebut sebelumnya, lakukan tindakan yang sesuai, misalnya berikan pesan
                return redirect()->back()->with('message', 'Anda telah membeli game ini sebelumnya.');
            } else {
                // Jika pengguna belum membeli game tersebut, lakukan operasi untuk memasukkan informasi pembelian game ke dalam tabel user_game
                UserGame::create([
                    'userid' => $userId,
                    'gameid' => $gameid,
                ]);

                // Berikan pesan sukses atau lakukan tindakan lain yang sesuai
                return redirect()->back()->with('message', 'Pembelian berhasil. Game telah ditambahkan ke akun Anda.');
            }
        } else {
            // Pengguna belum login, arahkan pengguna ke halaman login
            return redirect()->route('login')->with('message', 'Anda harus login terlebih dahulu untuk membeli game.');
        }
    }
    
    public function library()
    {
        $userId = auth()->user()->id;
        $games = UserGame::where('userid', $userId)->with('game')->get();

        return view('library', compact('games'));
    }

    
}