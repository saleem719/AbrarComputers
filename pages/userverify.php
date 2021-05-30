<?php
session_start();

if(isset($_POST['btnLogin']))
{
	
	$email = $_POST['txtEmail'];
	$pass = $_POST['txtPass'];
	
	$chk = check_customer($email,$pass);
	
	
	if($chk==true)
	{
		$users = find_customer($email,$pass);
		$_SESSION['user']= $users[0]['ID'];
		$_SESSION['nm']= $users[0]['Name'];
		
		echo"<script>window.location='home.php?mlink=manage.php' </script>";
	}
	else
	{
       echo"<script>window.location='index.php?mlink=login.php&message=Invalid User ID or  Password' </script>";
	
	} 
}
?>