<div id="left_side">
<div class="welcomeBar">Customer Login</div>
<div id="logStyle">
<br><br>
<fieldset style="width:350px; background-color:grey; border-radius:6px;">
<legend align="center"><img src="images/login_icon.png" height="100" width="110"></legend>
<table id="loginCSS">
<form action="home.php?mlink=userverify.php" method="post">
<tr><td>&nbsp;</td></tr>
<tr><td>Email:</td><td> <input type="text" size="30" name="txtEmail"></td></tr>
<tr><td>Pass:</td><td><input type="password"  size="30" name="txtPass"></td></tr>
<tr><td>&nbsp;&nbsp;</td></tr>
<tr class="loginButton"><td colspan="2" align="center"><input type="submit" name="btnLogin" value="Login">&nbsp;&nbsp;
<a href="home.php?mlink=Signup.php">SignUp  </a></td></tr>
<?php
if(isset($_GET['message']))
{
	$mes = $_GET['message'];
	
	echo '<h4><font color=red>&nbsp;&nbsp;&nbsp;&nbsp; Error! &nbsp;'.$mes.'</font></h4>';
	
	}
?>
</form>
</table>
</fieldset></div></div>


<!-------------------------------------------------------Admin Login Page---------------------------------------->

<div id="right_side">
<div class="welcomeBar">Admin Login</div>
<div id="logStyle">
<br><br>
<fieldset style="width:350px; background-color:grey; border-radius:6px;">
<legend align="center"><img src="images/Admin_icon.png" height="100" width="110"></legend>
<?php
if(isset($_GET['mess']))
{
	$mes = $_GET['mess'];
	
	echo '<h4><font color=red>&nbsp;&nbsp;&nbsp;&nbsp; Error! &nbsp;'.$mes.'</font></h4>';
	
	}
?>
<table id="loginCSS">
<form action="home.php?alink=verify.php" method="post">
<tr><td>&nbsp;</td></tr>
<tr><td>Email:</td><td> <input type="text" size="30" name="txtEmailad"></td></tr>
<tr><td>Pass:</td><td><input type="password" size="30" name="txtPass"></td></tr>
<tr><td>&nbsp;&nbsp;</td></tr>
<tr class="loginButton"><td colspan="2" align="center"><input type="submit" name="btnAdmin" value="Login"></td></tr>
</form>
</table>
</fieldset></div>

</div>  