<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>	

	<h1>Welcome Home!</h1>&nbsp
	<a href="/view_users">Back</a> |
	<a href="/logout">Logout</a> 

	<br>
	<table border="1">
		<tr>
			<td>ID</td>
			<td>{{$id}}</td>
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
	</table>

</body>
</html>