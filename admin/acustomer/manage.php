<?php
session_start();
	?>
<div class="welcomeBar"> Manage Customer details</div><br><br></br></br></br>
<?php
if(isset($_GET['messeage']))
{
	$mes = $_GET['messeage'];
	echo"<font color=red>".$mes."</font>";
	}
	?>
<h3><center><div><a href="home.php?alink=adminpanel.php">Admin panel</a></div> <br></center></h3>
<table width="95%" border="1" cellspacing="3" cellpadding="2">
<tr> 
<th> ID</th>
<th> Name </th>
<th> Email</th>
<th> Gender</th>
<th> City</th>
<th> Salary</th>
<th> Cell No</th>
<th colspan="2"> Select </th>
</tr> 
<?php
$user=get_customer();
foreach($user as $customer)
{
	echo"<tr>";
	echo"<td>".$customer['ID']."</td>";
	echo"<td>".$customer['Name']."</td>";
	echo"<td>".$customer['Email']."</td>";
	echo"<td>".$customer['Gender']."</td>";
	echo"<td>".$customer['City']."</td>";
	echo"<td>".$customer['Salary']."</td>";
	echo"<td>".$customer['Contact_number']."</td>";
	echo"<td><a href=home.php?alink=acustomer/edit.php&cid=".$customer['ID'].">Edit</td>";
	echo"<td><a href=home.php?alink=acustomer/delete.php&cid=".$customer['ID'].">Delete</td>";
	echo"</tr>";
	}

?>
</table>