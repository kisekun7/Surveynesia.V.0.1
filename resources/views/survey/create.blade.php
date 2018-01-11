<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Survey</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>Create Survey</h1>
	<br>
	<hr>
	<form action="/survey" method="post">
	<table>
		<tr>
			<td><input type="hidden" name="id_survey" value="{{$ksurvey}}"></td>
		</tr>
		<tr>
			<td>Survey Title :</td>
			<td><input type="text" name="survey_title"></td>
		</tr>
		<tr>
			<td>Category :</td>
			<td><select name="category">
				<option value="Game">Game</option>
				<option value="Politic">Politic</option>
				<option value="Holidays">Holidays</option>
				<option value="advanture">advanture</option>
				option
			</select></td>
		</tr>
		<tr>
			<td>Description :</td>
			<td><textarea name="description"></textarea></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><input type="submit" name="submit" value="Create">{{ csrf_field() }}</td>
		</tr>
	</table>
</form>
</body>
</html>