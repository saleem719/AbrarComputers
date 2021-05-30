<?php
session_start();

$userid = $_SESSION['user'];
$stat = 'Pending';

if(isset($_POST['btnapply']))
{
	$nm  = $_POST['txtname'];
	$lp  = $_POST['txtLap'];
	$md  = $_POST['txtModel'];
	$adr = $_POST['txtAddress'];
	$ins = $_POST['txtIns'];
	$csh = $_POST['txtCash'];
	
	$add =user_apply($userid,$nm,$lp,$md,$adr,$ins,$csh,$stat);
	if($add)
	{
		echo "<script>window.location='home.php?mlink=status.php&messa=Congratulation! You have successfully applied' </script>";
	}
	else
	{
		echo "<script>window.location='home.php?mlink=status.php&messa= Something went wrong' </script>";
		}
}

?>
