<?php
session_start();
?>
<div class="welcomeBar"> User Status</div><br><br> 
<center><h2><a href="home.php?mlink=manage.php">Home page</a></h2> </center><br>
<?php
	
if(isset($_GET['messa']))
      {
	$mes = $_GET['messa'];
	
	echo '<h4><font color=red>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$mes.'</font></h4>';
	
	}
?><br><br>
<table width='90%' border='1'>";
<tr>
<th> Name</th>
<th> Laptop</th>
<th> Model</th>
<th> Address</th>
<th> Installment</th>
<th> Payment</th>
<th style="color:red;"> Status</th>
</tr>

<?php
if(isset($_SESSION['user']))
{
	$us=$_SESSION['user'];
	$appiler=applied_users($us);
}
foreach($appiler as $users)
{
	echo"<tr>";
	echo"<td>".$users['Name']."</td>";
	echo"<td>".$users['Comp_name']."</td>";
	echo"<td>".$users['Model_no']. "</td>";
	echo"<td>".$users['Address']."</td>";
	echo"<td>".$users['Installment']."&nbsp months </td>";
	echo"<td>".$users['Pay_option']."</td>";
	echo"<td>".$users['Status']."</td>";
	echo"</tr>";
}
?>

</table>
