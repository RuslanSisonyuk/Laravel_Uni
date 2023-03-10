<!DOCTYPE html>
<html>
<head>
<title>Studenti - Adaugare</title>
</head>
<body>
@if (session('status'))
<div class="alert alert-success" role="alert">
	<button type="button" class="close" data-dismiss="alert">×</button>
	{{ session('status') }}
</div>
@elseif(session('failed'))
<div class="alert alert-danger" role="alert">
	<button type="button" class="close" data-dismiss="alert">×</button>
	{{ session('failed') }}
</div>
@endif
<form action = "/create" method = "post">
	<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
	<table>
	<tr>
	<td>Nume</td>
	<td><input type='text' name='Name' /></td>
	<tr>
	<td>Prenume</td>
	<td><input type="text" name='Surname'/></td>
	</tr>
	<tr>
	<td>Obiect</td>
	<td>
	<select name="Grupa">
	<option value="AAW1921">AAW1921</option>
	<option value="PAP1822">PAP1822</option>
	<option value="FCB9931">FCB9931</option>
	<option value="ABC1234">ABC1234</option>
	</select></td>
	</tr>

	<tr>
	<td colspan = '2'>
	<input type = 'submit' value = "Adauga student"/>
	</td>
	</tr>
	</table>
</form>
</body>
</html>