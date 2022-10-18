<!DOCTYPE html>
<html>
<head>
<title>Create Your Account!</title>
<link rel="stylesheet" href="crypto.css">
</head>
<body>
<h1>Create User Account</h1>
<hr>


<form method="post" action="createAccount.php">
  First name:<br>
  <input type="text" name="firstname"><br>
  Last name:<br>
  <input type="text" name="lastname" ><br><br>
  User name:<br>
  <input type="text" name="username" ><br><br>
  Password:<br>
  <input type="password" name="password1" ><br><br>
  Re-enter your Password:<br>
  <input type="password" name="password2" ><br><br>
  <input type="submit" value="Create Account">
</form>
<footer>
	<hr>

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

