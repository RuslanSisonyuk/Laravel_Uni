<!DOCTYPE html>
<html>
<head>
	<title>Profesori</title>
</head>
<body>

<table>
	<thead>
		<tr>
			<th>Nume</th>
			<th>Prenume</th>
            <th>Obiect</th>
		</tr>
	</thead>
	<tbody>
		@foreach($profesori as $p)
		<tr>
			<td>{{$p->Name}}</td>
			<td>{{$p->Surname}}</td>
			<td>{{$p->Object}}</td>
		</tr>
		@endforeach
	</tbody>
</table>

</body>
</html>