<html>
<head>
	<title>ACCOUNT</title>
	<link rel = "stylesheet" href ="css/style.css">
</head>
<style>
#HEAD{
	border: 2px solid;
	background-color: #d2d5cc; 
	border-color: white;
	font-size: 40;
	font-color: FFFFFF;
	width: 100%;
	height: 20px;
}
	body{
		background:url(images/account.jpg);
		background-repeat:no-repeat;
		background-size:100% 100%;
	background-attachment:fixed;
}
</style>


<div class="topnav" id="myTopnav">
	  <a href="login.php">Account</a>
	</div>
<body>
<center>
		<h1 class="lol">LOGIN</h1>
		
			<form action="checklogin.php" method="POST">
			<table>
			<tr>
				<td>Enter Username:
				<td><input type="text" name="username" required="required" />
			</tr>
			<tr>
				<td>Enter Password:
				<td><input type="password" name="password" required="required" />
			</tr>
			</table><br>
			<input type="submit" value="Login"/><br/><br/>
			<a class="set" href="register.php">Don't have account! Register here</a>
</center>
	</body>
</html>

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

</body>
</html>