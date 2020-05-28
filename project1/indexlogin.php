<?php
session_start();
include("i.php");
$username=$_POST['user'];
$password=$_POST['password'];
if ($username!='user' || $password!='password') {
	echo "  incorrect values";
}else{
	
$_SESSION["user"] = $username;

	header("Location:dashboard.php");	 

}?>