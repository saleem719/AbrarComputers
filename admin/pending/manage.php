<?php
session_start();

?>
<div class="welcomeBar"> Manage pending request</div><br><br>

<h3><center><div><a href="home.php?alink=adminpanel.php">Admin panel</a></div> <br></center></h3>

<table width='97%' border='1'>
<tr>
<th> ID</th>
<th> Name</th>
<th> Laptop</th>
<th> Model</th>
<th> Address</th>
<th> Installment</th>
<th> Payment</th>
<th> Status</th>
<th colspan="2"> Status</th>
</tr>
<?php
$homes = get_pendings();

foreach($homes as $home)
{
	echo"<tr>";
	echo"<td>".$home['ID']."</td>";
	echo"<td>".$home['Name']."</td>";
	echo"<td>".$home['Comp_name']."</td>";
	echo"<td>".$home['Model_no']."</td>";
	echo"<td>".$home['Address']."</td>";
	echo"<td>".$home['Installment']."&nbsp Months</td>";
	echo"<td>".$home['Pay_option']."</td>";
	echo"<td>".$home['Status']."</td>";
	echo"<td><a href=home.php?alink=pending/edit.php&rid=".$home['ID'].">Edit</td>";
	echo"<td><a href=home.php?alink=pending/delete.php&rid=".$home['ID'].">Delete</td>";
	echo"</tr>";
	}

?>
</table>
<br> 
<?php 
if(isset($_GET['message']))
{
	$mes = $_GET['message'];
	echo"<font color=red>".$mes."</font>";
	}
	?>