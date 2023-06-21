<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Games;

class UserGame extends Model
{
    use HasFactory;

    protected $table = 'usergame'; // Nama tabel di database
    
    // protected $primaryKey = 'id'; // Nama kolom primary key

    protected $fillable = [
        'userid', // Kolom untuk menyimpan ID user
        'gameid', // Kolom untuk menyimpan ID game
    ];

    // Relasi dengan model User
    public function user()
    {
        return $this->belongsTo(User::class, 'userid');
    }

    // Relasi dengan model Game
    public function game()
    {
        return $this->belongsTo(Games::class, 'gameid');
    }
}