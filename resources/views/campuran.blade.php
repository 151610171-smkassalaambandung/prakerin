<!DOCTYPE html>
<html>
<head>
	<title>Ini Halaman Index</title>
</head>
<body>

	DAFTAR : <b>{{$ata}} {{$aa}}</b>
	@foreach ($baru as $bina)
	<ul>
	<li>{{ $bina }}</li>
	</ul>
	@endforeach


</body>
</html>