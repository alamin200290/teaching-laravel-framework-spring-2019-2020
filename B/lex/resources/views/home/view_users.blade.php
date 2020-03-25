<!DOCTYPE html>
<html>
<head>
	<title>Admin Home</title>
</head>
<body>	

	<h1>User list</h1>&nbsp
	<a href="/home">Back</a> |
	<a href="/logout">Logout</a> 

	<br>
	<table border="1">
		<tr>
			<th>ID</th>
			<th>NAME</th>
			<th>ACTION</th>
		</tr>

		<!-- @for($i=0; $i < count($std); $i++)
		<tr>
			<td>{{ $std[$i]['id'] }}</td>
			<td>{{ $std[$i]['name'] }}</td>
			<td>{{ $std[$i]['cgpa'] }}</td>
			<td>{{ $std[$i]['dept'] }}</td>
		</tr>
		@endfor -->
		
		@foreach($std as $s)
		<tr>
			<td>{{ $s['id'] }}</td>
			<td>{{ $s['name'] }}</td>
			<td>
				<a href="/details/{{ $s['id'] }}">DETAILS</a> |
				<a href="/edit/{{ $s['id'] }}">EDIT</a> |
				<a href="/delete/{{ $s['id'] }}">DELETE</a>
			</td>
		</tr>
		@endforeach

	</table>


</body>
</html>