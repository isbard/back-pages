<?php

namespace Database\Seeders;

use App\Models\Player;
use App\Models\Team;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $teams = Team::factory()->count(20)->create();

        $teams->each(function($team){
            $players = Player::factory()->count(5)->create();

            $players->each(function($player) use ($team){
                $player->team()->attach($team);
                $player->save();
            });
        });
    }
}
