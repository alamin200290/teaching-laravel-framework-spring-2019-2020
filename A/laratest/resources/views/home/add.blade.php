<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>	

	<h1>Create User</h1>&nbsp
	<a href="{{route('home.list')}}">Back</a> |
	<a href="/logout">Logout</a> <br>

	<form method="post">
		{{csrf_field()}}
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username" value=""></td>
			</tr>

			<tr>
				<td>Name</td>
				<td><input type="text" name="name" value=""></td>
			</tr>
			<tr>
				<td>CGPA</td>
				<td><input type="text" name="cgpa" value=""></td>
			</tr>
			<tr>
				<td>DEPT</td>
				<td><input type="text" name="dept" value=""></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" value=""></td>
			</tr>
			<tr>
				<td>Type</td>
				<td><input type="text" name="type" value=""></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Create"></td>
			</tr>
		</table>
	</form>
</body>
</html>