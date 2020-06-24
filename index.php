
<?php
$db=mysqli_connect("localhost","root","");
$deep=mysqli_select_db($db,"deep");
if(isset($_POST["submit"]))
{
	$a=$_POST["Username"];
	$b=$_POST["Password"];
	$sql="insert into battel1(Username,Password) values('$a','$b')";
	if(mysqli_query($db,$sql))
	{
		echo "data has been send";
		header("Location:http://localhost/example/home.html");
	
	}


}
?>

<html>
	<head>
	</head>
<style>
body{
	margin: 0;
	padding: 0;
	background:url(img.jpg)no-repeat;
	background-size: cover;
	
	font-family: sans-serif;
}
.login-box{
	width: 320px;
	height: 420px;
	background: rgba(0, 0, 0, 0.5);
	color: #fff;
	top: 50%;
	left: 50%;
	position: absolute;
	transform: translate(-50%,-50%);
	box-sizing: border-box;
	padding: 70px 30px;

}
.avater{
	width: 100px;
	height: 100px;
	border-radius: 50%;
	position: absolute;
	top: -50px;
	left: calc(50% - 50px);

}
h1{
	margin: 0;
	padding: 0 0 20px;
	text-align: center;
	font-size: 22px;
}
.login-box p{
	margin: 0;
	padding: 0;
	font-weight: bold;
}
.login-box input{
	width: 100%;
	margin-bottom: 20px;
}
.login-box input[type="text"], input[type="password"]
{
	border: none;
	border-bottom: 1px solid #fff;
	background: transparent;
	outline:none;
	height: 40px;
	color: #fff;
	font-size: 16px; 
}
.login-box input[type="submit"]
{
	border: none;
	outline: none;
	height: 40px;
	background: #1c8adb;
	color: #fff;
	font-size: 18px;
	border-radius: 20px;

}
.login-box input[type="submit"]:hover
{
	cursor: pointer;
	background: #39dc79;
	color: #000; 
}
.login-box a{
	text-decoration: none;
	font-size: 14px;
	color: #fff;
}
.login-box a:hover
{
	color:#39dc79;

}
</style>
	<body>
<div class="login-box">
	<img src="avater.png" class="avater">
	<h1> Login Here</h1>
<form action="#" method="POST">
	<p>Username</p>
<input type="text" name="Username" placeholder="Enter Your Name">
<p>Password</p>
<input type="Password"name="Password" placeholder="Enter Your Password">

<input type="submit" name="submit" value="login"><br>
<a href="#">Forget Password</a>   //
<a href="#">Sign Up</a>

</form>
	</div>
	</body>
</html>
