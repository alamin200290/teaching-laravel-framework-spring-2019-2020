<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
	<h1>Login Page</h1>
	<form method="post" >
		@csrf
<!-- 		{{csrf_field()}} -->		
<!-- 		<input type="hidden" name="_token" value="{{csrf_token()}}"> -->
		Username: <input type="text" name="uname" > <br>
		Password: <input type="password" name="password" ><br>
		<input type="submit" name="submit" value="Submit" >
	</form>

	<h3>{{session('msg')}}</h3>
</body>
</html>