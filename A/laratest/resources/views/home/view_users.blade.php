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
		
		@for($i=0; $i< count($stds); $i++)
		<tr>
			<td>{{$stds[$i]['id']}}</td>
			<td>{{$stds[$i]['name']}}</td>
			<td>{{$stds[$i]['cgpa']}}</td>
			<td>{{$stds[$i]['dept']}}</td>
			<td>
				<a href="/home/edit/{{$stds[$i]['id']}}">Edit</a> | 
				<a href="/home/delete/{{$stds[$i]['id']}}">Delete</a> 
			</td>
		</tr>
		@endfor
	</table>

</body>
</html>