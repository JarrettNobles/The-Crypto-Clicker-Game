<!DOCTYPE html>
<html>
<head>
<title>Create Your Account!</title>
<link rel="stylesheet" href="crypto.css">
</head>
<body>
<h1>Create User Account</h1>



<form method="post" action="createAccount.php">
  User name:<br>
  <input type="text" name="username" ><br><br>
Profile Picture: <br>
	<input type="file" class="form-control" name="pp">
  Password:<br>
  <input type="password" name="password1" ><br><br>
  Re-enter your Password:<br>
  <input type="password" name="password2" ><br><br>
  <input type="submit" value="Create Account">
</form>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<footer>
<center>
<p> Already have an account click the button below</p>
</center>
	<form action="login.html">
		<input type="submit" value="Login" />

</footer>
<style>
form{
	text-align: center;
}
input{
	width: 75%;
}
h1{
	text-align: center;
}
.button{
	padding: 15px 32px;
}
hr{
	display:block;
	/*width: 300px;*/
	margin-left: auto;
	margin-right: auto;
	height: 100px;
	background-color:#666;
	opacity: 0.5;
}


</style>
</body>
</html>

