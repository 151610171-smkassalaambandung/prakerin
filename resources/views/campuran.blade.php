<!DOCTYPE html>
<html>
<center>
<head>
	<title>Ini Halaman Index</title>
</head>
<body>
	DAFTAR : <b>{{$data}} - {{$data2}}</b>
	@foreach ($query as $key)
	<li>{{ $key }}</li><hr>
	
	@endforeach

</body>
</center>
</html>