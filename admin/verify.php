<?php 
session_start();

if(isset($_POST['btnAdmin']))
{
	$email = $_POST['txtEmailad'];
	$pass = $_POST['txtPass'];
	
	$chk=check_admin($email,$pass);
	
	if($chk!=false)
	{
		echo "<script>window.location='home.php?alink=adminpanel.php'</script>";
		
		}
	else
	{
		echo "<script>window.location='index.php?mlink=login.php&mess=Invalid ID or Password'</script>";
		}
	
	}




?>