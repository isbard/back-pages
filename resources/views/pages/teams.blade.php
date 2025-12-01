<div>
    <h1>Teams</h1>
    <div class="teams">
        @foreach ($teams as $team)
            <a href="/back-pages/public/teams/{{ $team->team_id }}">
                <p>{{$team->name}}</p>
            </a>
        @endforeach
    </div>
</div>
