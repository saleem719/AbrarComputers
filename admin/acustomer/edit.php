<?php
if(isset($_GET['cid']))
{
	$c = $_GET['cid'];
	$customer = get_a_customer($c);
}
?>
<div class="welcomeBar"> Edit Customer Detail</div><br><br></br></br></br>
<center>
<table width="40%" cellspacing="3" cellpadding="6">
<form action="home.php?alink=acustomer/update.php" method="post">
<tr>
<td> ID:</td>
<td><input type="text" name="txtId" size="30" readonly  value="<?php echo $customer[0]['ID'];?>"></td>
</tr>

<tr><td>Name:</td>
<td ><input type="text" name="txtName" size="30" value="<?php echo $customer[0]['Name'];?>"></td></tr>

<tr><td>Email:</td>
<td><input type="text" name="txtEm" size="30" value="<?php echo $customer[0]['Email'];?>"></td></tr>

<tr><td>Password:</td>
<td><input type="text" name="txtPas" size="30" value="<?php echo $customer[0]['Password'];?>"></td></tr>

<tr>
<td>Gender:</td> 
<td><select name="txtGen">
  <?php
			  if($customer[0]['Gender']=='Male')
			  {
		    ?>
            
<option value="Male" selected>Male</option>
<option value="Female">Female</option>

  <?php
			  }
		else
		{
			?>
       <option value="Male">Male</option>
       <option value="Female"  selected>Female</option>
		<?php
		}
		?>
        </select></td></tr>

<tr><td>City:</td>   
<td><input type="text" name="txtCity" size="30" value="<?php echo $customer[0]['City'];?>"></td></tr>

<tr><td>Salary:</td>   
<td><input type="text" name="txtSalary" size="30" value="<?php echo $customer[0]['Salary'];?>"></td></tr>

<tr><td>Cell No:</td>   
<td><input type="text" name="txtCell" size="30" value="<?php echo $customer[0]['Contact_number'];?>"></td></tr>

<tr><td>&nbsp;</td></tr>
<tr><td colspan="2" align="center"><input type="submit" class="calbtn" name="btnUpdate" value="Update"></td></tr>
</form>
</table>
<hr>
</center>