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
	<form method="post">
		{{csrf_field()}}
		<table border="1">
			<tr>
				<td>ID</td>
				<td><input type="text" readonly name="id" value="{{$userId}}"></td>
			</tr>
			<tr>
				<td>Username</td>
				<td><input type="text"  name="username" value="{{$username}}"></td>
			</tr>
			<tr>
				<td>Name</td>
				<td><input type="text"  name="name" value="{{$name}}"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password"  name="password" value="{{$password}}"></td>
			</tr>
			<tr>
				<td>CGPA</td>
				<td><input type="text"  name="cgpa" value="{{$cgpa}}"></td>
			</tr>
			<tr>
				<td>DEPT</td>
				<td><input type="text"  name="dept" value="{{$dept}}"></td>
			</tr>
			<tr>
				<td>Type</td>
				<td><input type="text"  name="type" value="{{$type}}"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit"  name="submit" value="Save"></td>
			</tr>
		</table>
	</form>

</body>
</html>