<?php

namespace App\Http\Controllers;

use App\Models\Player;

class PlayerController extends Controller
{
    public function list()
    {
        $players = Player::get();

        return view('pages.players', ['players' => $players]);
    }

    public function getPlayer(int $playerId)
    {
        $player = Player::where('team_id', $playerId)
            ->with('team')
            ->firstOrFail();

        return view('pages.player', [
            'player' => $player,
        ]);
    }
}
