<!DOCTYPE html>
<html>
<head>
	<title>Latihan</title>
</head>
<body>
	<h3>BUAH</h3>
	<tr>
		@foreach($buah as $data)
		{{$data}}<hr>
		@endforeach
		</tr>
		<h3>HEWAN</h3>
		<br>
			<tr>
		@foreach($hewan as $data)
		{{$data}}<hr>
		@endforeach
		</tr>
		<h3>KOMPUTER</h3>
		<br>
			<tr>
		@foreach($komputer as $data)
		{{$data}}<hr>
		@endforeach
		</tr>

</body>
</html>