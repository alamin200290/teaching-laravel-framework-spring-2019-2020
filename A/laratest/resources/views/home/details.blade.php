<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>	

	<h1>User Details</h1>&nbsp
	<a href="/logout">Logout</a> <br>

		<table border="1">
			<tr>
				<td>Id</td>
				<td>{{$userId}}</td>
			</tr>
			<tr>
				<td>Username</td>
				<td>{{$username}}</td>
			</tr>
			<tr>
				<td>Name</td>
				<td>{{$name}}</td>
			</tr>
			<tr>
				<td>CGPA</td>
				<td>{{$cgpa}}</td>
			</tr>
			<tr>
				<td>DEPT</td>
				<td>{{$dept}}</td>
			</tr>
			<tr>
				<td>Password</td>
				<td>{{$password}}</td>
			</tr>
			<tr>
				<td>Type</td>
				<td>{{$type}}</td>
			</tr>
			<tr>
				<td><a href="{{route('home.list')}}">Back</a></td>
				<td></td>
			</tr>
		</table>
</body>
</html>