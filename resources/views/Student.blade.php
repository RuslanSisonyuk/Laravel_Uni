<!DOCTYPE html>
<html>
<head>
	<title>Studenti</title>
</head>
<body>

<table>
	<thead>
		<tr>
			<th>Nume</th>
			<th>Prenume</th>
            <th>Grupa</th>
		</tr>
	</thead>
	<tbody>
		@foreach($students as $p)
		<tr>
			<td>{{$p->Name}}</td>
			<td>{{$p->Surname}}</td>
			<td>{{$p->Grupa}}</td>
		</tr>
		@endforeach
	</tbody>
</table>

</body>
</html>