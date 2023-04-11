<html>
	<head>
		<title>Registration</title>
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
	  <a href="register.php">Register</a>
	</div>
	<body>
	<center>
		<h1 class="lol">Registration Page</h1>
		
			
			<form action="register.php" method="POST">
			<table>
			<tr>
				<td>Enter First Name:
				<td><input type="text" name="fname" required="required" />
			</tr>
			<tr>
				<td>Enter Last Name:
				<td><input type="text" name="lname" required="required" />
			</tr>
			<tr>
				<td>Enter Username:
				<td><input type="text" name="username" required="required" />
			</tr>
			<tr>
				<td>Enter Birthday Month:
				<td><input type="text" name="month" required="required" />
			</tr>
			<tr>
				<td>Enter Birthday Day:
				<td><input type="text" name="day" required="required" />
			</tr>
			<tr>
				<td>Enter Address:
				<td><input type="text" name="address" required="required" />
			</tr>
			<tr>
				<td>Enter Email:
				<td><input type="text" name="email" required="required" />
			</tr>
			<tr>
				<td>Enter Password:
				<td><input type="password" name="password" required="required" />
			</tr>
			</table><br>
			<input type="submit" value="Register"/><br/><br/>
			<a href="login.php">Have an Account? Login Here!</a>
		</center>
	</body>
</html>

<?php
	if($_SERVER["REQUEST_METHOD"] == "POST"){
	$fname = ($_POST['fname']);
	$lname = ($_POST['lname']);
	$username = ($_POST['username']);
	$month = ($_POST['month']);
	$day = ($_POST['day']);
	$address = ($_POST['address']);
	$email = ($_POST['email']);
	$password = ($_POST['password']);
	echo "Firstname entered is: " . $fname. "<br/>";
	echo "Lastname entered is: " . $lname. "<br/>";
	echo "Username entered is: " . $username. "<br/>";
	echo "Birthday entered is: " . $month. " ". $day. "<br/>";
	echo "Address entered is: " . $address. "<br/>";
	echo "Email entered is: " . $email. "<br/>";
	
}

if($_SERVER["REQUEST_METHOD"] == "POST")
 {
	$fname = ($_POST['fname']);
	$lname = ($_POST['lname']);
	$username = ($_POST['username']);
	$month = ($_POST['month']);
	$day = ($_POST['day']);
	$address = ($_POST['address']);
	$email = ($_POST['email']);
	$password = ($_POST['password']);
	
	@include 'config.php';
	
	$bool = true;
	$query = "SELECT * from users";
	$results = mysqli_query($conn, $query); //Query the users table
	while($row = mysqli_fetch_array($results)) //display all rows from query
	{
		$table_users = $row['fname']; // the first username row is passed on to
		//$table_users, and so on until the query is finished
		if($fname == $table_users) // checks if there are any matching fields
		{
			$bool = false; // sets bool to false
			Print '<script>alert("User is taken!");</script>'; 
			Print '<script>window.location.assign("register.php");</script>'; 
		}
}
if($bool)
{
	mysqli_query($conn, "INSERT INTO users (fname, lname,username,month,day,address,email,password) VALUES('$fname','$lname','$username','$month',$day,'$address','$email','$password')"); 
	Print '<script>alert("Successfully Registered!");</script>'; 
	Print '<script>window.location.assign("login.php");</script>'; 
}
 }
?>