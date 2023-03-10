<!DOCTYPE html>
<html>
<head>
<title>Salariu - Adaugare</title>
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
	<td>Grad</td>
	<td><input type='text' name='Grade' /></td>
	<tr>
	<td>Cantitate</td>
	<td><input type="number" name='Amount'/></td>
	</tr>
	<tr>
	<td colspan = '2'>
	<input type = 'submit' value = "Adauga Salariu"/>
	</td>
	</tr>
	</table>
</form>
</body>
</html>