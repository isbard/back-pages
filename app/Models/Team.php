<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Team extends Model
{
    use HasFactory;

    public $timestamps = false;

    public $primaryKey ='team_id';

    public function players(): BelongsToMany
    {
        return $this->belongsToMany(Player::class, 'player_teams', 'team_id', 'player_id');
    }
}
