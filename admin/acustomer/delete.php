<?php
if(isset($_GET['cid']))
{
	$cusId = $_GET['cid'];
	$chk = delete_customer($cusId);
	
	if($chk) 
	{
		echo"<script>window.location='home.php?alink=acustomer/manage.php&messeage=Delete successfully'</script>";
		
		}
	else
	{
		echo"<script>window.location='home.php?alink=acustomer/manage.php&messeage=Deletion failed'</script>";
		
		}
	
	

	
		
		}
?>