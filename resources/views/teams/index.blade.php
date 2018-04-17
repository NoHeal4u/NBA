<!DOCTYPE html>
<html>
<head>
	<title>Timovi</title>
</head>
<body>
<p>Timovi:</p><br>
<ul>
	@foreach ($teams as $team)

	<li><a href="{{route('single-team',['id'=> $team->id])}}">{{$team->name}}</a></li>

	@endforeach
</ul>

</body>
</html>