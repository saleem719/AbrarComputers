<?php 
if(isset($_POST['btnUpdate']))
{
	$aid = $_POST['txtId'];
	$nm = $_POST['txtName'];
	$lapn = $_POST['txtLap'];
	$modn= $_POST['txtMod'];
	$addr= $_POST['txtAdd'];
	$ins= $_POST['txtIns'];
	$pay= $_POST['txtPay'];
	$sta= $_POST['txtStatus'];
	
	$done = update_status($aid,$nm,$lapn,$modn,$addr,$ins,$pay,$sta);
		
	if($done)
	{
		echo" <script>window.location='home.php?alink=pending/manage.php&message=Update Successfully'</script>";
	}
	else
	{
		echo" <script>window.location='home.php?alink=pending/manage.php&message=Updation failed'</script>";
	}
}
	?>