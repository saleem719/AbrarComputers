<?php 
session_start();

if(!isset($_SESSION['admin']))
{
	echo" <script> window.location='index.php?alink=login.php'</script>";
}
else
{
	?>
<div class="SearchBar">
<div class="logout">
<a href="index.php?alink=adminlogout.php"><img src="images/lout.jpg" height="37" width="120"></a>
</div>  
</div><br><br> <br><hr><br> 

<center><h3><b>Admin Panel </h3></b></center>
<h2></h2>
<div class="AdminTask">
<ul style="list-style:url(images/checked.png)">
<li><h3><a href="home.php?alink=pending/manage.php"> Manage pending requests</a></h3></li>
<li><h3><a href="home.php?alink=acustomer/manage.php"> Manage customer </a></h3></li>
</div>

<?php 
}
?>