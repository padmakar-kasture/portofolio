<!DOCTYPE html>
<html>
<head>
	<title>form</title>
	<style>
		body{
	background-color: rgba(0,0,0,0.7);

}
h1{
	color: green;
}

.login{
	border-radius: 50px;
	height: 30px; 
	width: 150px;
	margin-top: 50px;
background-color: green;
border:green;

}
.user{
	margin-left: 40%;
	margin-right: 40%;
	margin-top: 15%;

}
.form{
	height: 300px;
	width: 200px;
	border-radius: 50px;
	background: black;
   padding: 15%;
   text-align: center;
	
}
.container{
	overflow: hidden;
}
#top{
	background-color: coral;
	text-align: center;
	color: white;
	top:0;
}
.field{
    height: 30px;
    width: 200px;
	border-radius: 50px;
	text-align: center;

}
</style>
</head>
<body>
	<header class="container" id="top">
		<h2>welcome to sggs</h2>
	</header>
	<nav class="container" id="navbar">
	</nav>
	<section class="user">
		<form method="post"action="indexlogin.php" class="form" >
			<h1>login page</h1>
		<div class="bgblack">
			
			<input type="text" name="user" placeholder="enter a username" required class="field"><br><br>
		<input type="password" name="password" placeholder="enter a password" required class="field"><br><br>
		</div>
		<input type="submit" name="button1" class="login">
	</form>
	</section>


</body>
</html>