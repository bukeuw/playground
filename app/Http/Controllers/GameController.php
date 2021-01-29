<?php

namespace App\Http\Controllers;

use App\Player;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index()
    {
        $players = Player::all();

        return view('welcome', compact('players'));
    }

    public function win(Request $request, $playerId)
    {
        $player = Player::findOrFail($playerId);
        $point = $player->point;
        $winCount = $player->win;

        $player->update([
            'point' => $point + 10,
            'win' => $winCount + 1,
        ]);

        return redirect('/');
    }

    public function lose(Request $request, $playerId)
    {
        $player = Player::findOrFail($playerId);
        $point = $player->point;
        $loseCount = $player->lose;

        $player->update([
            'point' => $point === 0 ? $point : $point - 10,
            'lose' => $loseCount + 1,
        ]);

        return redirect('/');
    }
}
