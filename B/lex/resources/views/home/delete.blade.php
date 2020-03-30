<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>	

	<h1>Welcome Home!</h1>&nbsp
	<a href="{{route('home.list')}}">Back</a> |
	<a href="/logout">Logout</a> 

	<br>
	<table border="1">
		<tr>
			<td>ID</td>
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
			<td>Type</td>
			<td>{{$type}}</td>
		</tr>
	</table>
	<h3>Are you sure? This can't be undone...</h3>
	<form method="post">
		{{csrf_field()}}
		<input type="hidden" name="userId" value="{{$userId}}"/>
		<input type="submit" name="submit" value="Confirm"/>
	</form>
</body>
</html>