<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>	

	<h1>Welcome Home!</h1>&nbsp
	<a href="{{route('home.index')}}">back</a> |
	<a href="/logout">Logout</a> 

	<table border="1">
		<tr>
			<th>ID</th>
			<th>NAME</th>
			<th>CGPA</th>
			<th>DEPT</th>
			<th>Action</th>
		</tr>
		
		@foreach($users as $user)
		<tr>
			<td>{{$user['userId']}}</td>
			<td>{{$user['name']}}</td>
			<td>{{$user['cgpa']}}</td>
			<td>{{$user['dept']}}</td>
			<td>
				<a href="{{route('home.edit', $user['userId'])}}">Edit</a> | 
				<a href="{{route('home.delete', $user['userId'])}}">Delete</a> |
				<a href="{{route('home.show', $user['userId'])}}">Details</a> 
			</td>
		</tr>
		@endforeach
	</table>

</body>
</html>