<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>	

	<h1>User Details</h1>&nbsp
	<a href="/logout">Logout</a> <br>

		<table>
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
		</table>
		<h2>Are you sure? This can't be undone!</h2>
		<form method="post">
			{{csrf_field()}}
			<input type="hidden" name="userId" value="{{$userId}}">
			<input type="submit" name="submit" value="Confirm">
		</form>
</body>
</html>