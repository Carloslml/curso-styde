<!DOCTYPE html>
<html>
<head>
	<title>Listado de usuarios</title>
</head>
<body>
<h1> {{ $title }} </h1>


<ul>
@foreach ($users as $user)
	<li>{{ $user }} </li>
@endforeach
</ul>

</body>
</html>