<html>
	<head>
		<title>HOME PAGE</title>
		<link rel = "stylesheet" href ="css/styles.css">
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
				background:url(images/home.jpg);
				background-repeat:no-repeat;
				background-size:100% 100%;
				background-attachment:fixed;
			}
					
	</style>
	
	<div class="topnav" id="myTopnav">
	  <a href="home.php">Stephen's Party Depot</a>
	</div>
	<body>
	
		<div class = "home">
			<center><h1>STEPHEN'S PARTY DEPOT</h1></center>
		</div>
		<center><a href = "login.php">
		<button class="buts">INQUIRE</button></a></center>
		
		
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