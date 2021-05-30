<?php
session_start();

if(!isset($_SESSION['user']))
{
        echo"<script>window.location='index.php?mlink=login.php' </script>";
		
	}
	else
	{
		$nam=$_SESSION['nm'];
	}
	
	?>
<div class="wrap">
<div class="SearchBar">
<div class="user"><img src="images/icon.png" height="38" width="80"></div>
<div class="UserIcon"><?php  echo "<font color='#000000'>".$nam."</font>"?></div>
<div class="logout">
<a href="home.php?mlink=logout.php"><img src="images/lout.jpg" height="37" width="120"></a>
</div>
</div>
<br><br><br><br> 
<center><h2><a href="home.php?mlink=status.php">User Status</a></h2></center><br>
<table width="90%" border="1">
<tr> 
<th> Image</th>
<th> Laptop</th>
<th> Model </th>
<th> Total Price</th>
<th> Down Price</th>
<th> Check Installment </th>
</tr> 


<?php
$homes = get_laptops();
foreach($homes as $home)
{
	echo"<tr>";
	echo"<td><img height=120 width=150 src=".$home['Image']."></td>";
	echo"<td>".$home['Laptop_name']."</td>";
	echo"<td>".$home['Model_number']."</td>";
	echo"<td>".$home['Total_amount']."</td>";
	echo"<td>".$home['Down_payment']."</td>";
	echo"<td><a href=Home.php?mlink=calculate.php&modno=".$home['Model_number'].">Select</td>";
	echo"</tr>";
	} 
	?>
</table>
</div>
