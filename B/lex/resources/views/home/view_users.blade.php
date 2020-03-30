<!DOCTYPE html>
<html>
<head>
	<title>Admin Home</title>
</head>
<body>	

	<h1>User list</h1>&nbsp
	<a href="{{route('home.index')}}">Back</a> |
	<a href="/logout">Logout</a> 

	<br>
	<table border="1">
		<tr>
			<th>ID</th>
			<th>USERNAME</th>
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
			<td>{{ $s['userId'] }}</td>
			<td>{{ $s['username'] }}</td>
			<td>
				<a href="{{route('home.show', $s['userId'])}}">DETAILS</a> |
				<a href="{{route('home.edit', $s['userId'])}}">EDIT</a> |
				<a href="{{route('home.delete', $s['userId'])}}">DELETE</a>
			</td>
		</tr>
		@endforeach

	</table>


</body>
</html>