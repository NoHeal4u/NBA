<!DOCTYPE html>
<html>
<head>
	<title>{{ $team->name }}</title>
</head>
<body>
<p>IME TIMA: {{ $team->name }}</p>
<p>EMAIL ADRESA: {{ $team->email }}</p>
<p>ADRESA: {{ $team->address }}</p>
<p>GRAD: {{ $team->city }}</p>

<p>IGRACI:</p>

@foreach($team->players as $player)
                <ol>
                  <a href="{{route('single-player',['id'=> $player->id])}}">{{ $player->first_name }} {{ $player->last_name }}</a>
                  
                </ol>
@endforeach
</body>
</html>

