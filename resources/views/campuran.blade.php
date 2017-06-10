<!DOCTYPE html>
<html>
<head>
	<title>Ini Halaman Index</title>
</head>
<body>
	DAFTAR : <b>{{$data}} {{$data2}}</b>
	@foreach ($query as $key)
	<ul>
	<li>{{ $key }}</li><hr>
	</ul>
	
	@endforeach

</body>
</html>