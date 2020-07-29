<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<style>
		#anim
		{
			margin-top:30;
			font-size:19;
			text-decoration:bold;
			background-color:#e16e0a ;
			color:white;
		}
		#anim2
		{
			font-size:19;
			color:white;
			background-color:#a86232 ;
			border-color:white;
			border-width:3px;
		}
	</style>
</head>
<body style="background-image:url(coffee.jpg);background-repeat: no-repeat;background-size:cover;">
	<br><br><br><br><br><br><br><br><br>
	<center><h1><b><p style="margin-top:230;color:white;"><u><i> Login </i></u></p></b></h1></center>
	<form action="login.php" method="POST">

		<table align="center"cellspacing="8px" id="anim">

<tr>
<td>User ID : </td>
<td><input type="text" name="username" required></td>
<tr>
<tr>
<td>Password : </td>
<td><input type="password" name="password" required></td>
<tr>
<tr>
<td><input type="submit" name="submit" value="LOGIN" id="anim2"></td>
<td><input type="reset" name="reset" value="RESET" id="anim2"></td>
<tr>
<tr>
<td><?php
	if(isset($_SESSION['msg']))
	{
		echo $_SESSION['msg'];
		unset($_SESSION['msg']);
		session_destroy();
	} ?></td>
</tr>

</table>
<br/>
<center><a href="register.php" id="anim2">or Create new account</a></center>
</form>
</body>
</html>
