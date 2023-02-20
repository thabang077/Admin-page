<?php

$host="localhost";
$user="root";
$password="";
$db="admin_page";

session_start();


$data=mysqli_connect($host,$user,$password,$db);

if($data===false)
{
	die("connection error");
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$username=$_POST["user_name"];
	$password=$_POST["pass_word"];

	// This username and password comes from the DB
	$sql="select * from users where username='".$username."' AND password='".$password."' ";

	$result=mysqli_query($data/* This is from the connection section*/ ,$sql);

	$row=mysqli_fetch_array($result);

	if($row["type"]=="user")
	{	

		$_SESSION["user_name"]=$username;

		header("location:sheets.php");

	}

	elseif($row["type"]=="admin")
	{
		//echo "admin";

		$_SESSION["user_name"]=$username;
		
		header("location:adminhome.php");

	}

	else
	{
		echo "username or password incorrect";
	}

}





?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

	<style type="text/css">
	
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: orange;
		border: none;
	}

	#box{

		background-color: gray;
		margin: auto;
		width: 300px;
		padding: 20px;
	}

	</style>

	<div id="box">
		
		<form class="form" method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Login</div>

			<input id="text" type="text" name="user_name"><br><br>
			<input id="text" type="password" name="pass_word"><br><br>

			<input id="button" type="submit" value="Login"><br><br>

		</form>
	</div>
</body>
</html>