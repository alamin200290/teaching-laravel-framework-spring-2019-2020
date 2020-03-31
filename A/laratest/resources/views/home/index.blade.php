<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>	

	<h1>Welcome Home! {{session('xyz')}}</h1>&nbsp

	<a href="{{route('home.add')}}">Create User</a> |
	<a href="{{route('home.list')}}">View Users</a> |
	<a href="/logout">Logout</a> 

</body>
</html>