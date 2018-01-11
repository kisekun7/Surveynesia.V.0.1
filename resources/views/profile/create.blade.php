@extends('layouts.mastah')

@section('content')
<br>
<form action="/survey" method="post">
	<table>
		<tr>
			<td>Survey Title :</td>
			<td><input type="text" name="survey_title"></td>
		</tr>
		<tr>
			<td>Description :</td>
			<td><input type="text" name="description"></td>
		</tr>
	</table>
	<input type="submit" name="submit" value="Create">
		{{ csrf_field() }}
</form>
 @endsection