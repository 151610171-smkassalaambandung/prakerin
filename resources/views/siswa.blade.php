<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>
		<table border="10">
		<thead>
		<tr class="bg-info">
			<th>Id</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Jenis Kelamin</th>
			</tr>
			</thead>
			<?php
				$no = 1;
			?>
			@foreach ($a as $data)
			<tr>
				<td>{{ $no++ }}</td>
				<td>{{ $data->nama }}</td>
				<td>{{ $data->alamat }}</td>
				<td>{{ $data->jk }}</td>
			</tr>
			@endforeach
			</table>

</body>
</html>