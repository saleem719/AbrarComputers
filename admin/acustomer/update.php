<?php
if(isset($_POST['btnUpdate']))
{
	$id = $_POST['txtId'];
    $nam= $_POST['txtName'];
	$em= $_POST['txtEm'];
	$pas= $_POST['txtPas'];
	$gen= $_POST['txtGen'];
	$city = $_POST['txtCity'];
	$salary = $_POST['txtSalary'];
	$cell= $_POST['txtCell'];
	
	$chk = update_customer($id,$nam,$em,$pas,$gen,$city,$salary,$cell);
    if($chk) 
	{
		echo" <script>window.location='home.php?alink=acustomer/manage.php&messeage=Update successfully'</script>";
		}
	else
	{
		echo" <script>window.location='home.php?alink=acustomer/manage.php&messeage=Updation failed'</script>";
		
		}
	
	

	
		
		}
?>