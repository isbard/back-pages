<div>
    <a href='/'>back</a>
    <p>Name: {{ $team->name }}</p>
    <p>Nickname: {{ $team->nick_name }}</p>
    <div>
        <ul>
            @foreach ($team->players as $player)
                <li>{{ $player->first_name }} {{ $player->last_name }}</li>
            @endforeach
        </ul>
    </div>
</div>
