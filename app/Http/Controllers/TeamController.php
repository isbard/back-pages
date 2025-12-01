<?php

namespace App\Http\Controllers;

use App\Models\Team;

class TeamController extends Controller
{
    public function list()
    {
        $teams = Team::get();

        return view('pages.teams', ['teams' => $teams]);
    }

    public function getTeam(int $teamId)
    {
        $team = Team::where('team_id', $teamId)
            ->with('players')
            ->firstOrFail();

        return view('pages.team', [
            'team' => $team,
        ]);
    }
}
