<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Player extends Model
{
    use HasFactory;

    public $timestamps = false;

    public $primaryKey = 'player_id';

    public function Team(): BelongsToMany
    {
        return $this->belongsToMany(Team::class, 'player_teams', 'player_id', 'team_id');
    }
}
