<!DOCTYPE html>
<html>
<head>
	<title>Salariu</title>
</head>
<body>

<table>
	<thead>
		<tr>
			<th>Grad</th>
			<th>Cantitate</th>
		</tr>
	</thead>
	<tbody>
		@foreach($salariu as $s)
		<tr>
			<td>{{$s->Grade}}</td>
			<td>{{$s->Amoubt}}</td>
		</tr>
		@endforeach
	</tbody>
</table>

</body>
</html>