<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>	

	<h1>Welcome Home!</h1>&nbsp
	<a href="/home/view_users">Back</a> |
	<a href="/logout">Logout</a> <br>

	<form>
		<table>
			<tr>
				<td>Id</td>
				<td><input type="text" readonly name="id" value="{{$id}}"></td>
			</tr>

			<tr>
				<td>Name</td>
				<td><input type="text" name="name" value="{{$name}}"></td>
			</tr>
			<tr>
				<td>CGPA</td>
				<td><input type="text" name="cgpa" value="{{$cgpa}}"></td>
			</tr>
			<tr>
				<td>DEPT</td>
				<td><input type="text" name="dept" value="{{$dept}}"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="button" name="submit" value="update"></td>
			</tr>
		</table>
	</form>

</body>
</html>