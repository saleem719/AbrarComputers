<?php
if(isset($_GET['rid']))
{
	$aid = $_GET['rid'];
	$chk = delete_request($aid);
	
	if($chk) 
	{
		echo" <script>window.location='home.php?alink=pending/manage.php&message=Delete successfully'</script>";
		}
	else
	{
		echo" <script>window.location='home.php?alink=pending/manage.php&message= Deletion failed'</script>";
		
		}
	
	

	
		
		}
?>