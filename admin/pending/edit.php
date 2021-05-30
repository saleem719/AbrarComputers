<?php
session_start();


if(isset($_GET['rid']))
{
	$home = $_GET['rid'];
	$ho = get_a_applieduser($home);
	}
?>
<div class="welcomeBar"> Update pending request</div><br><br>
<center>
<table width='50%'>
<form action="home.php?alink=pending/update.php" method="post" enctype="multipart/form-data">
<tr>
<td>ID:</td>
<td><input type="text" name="txtId" size="30" readonly value="<?php echo $ho[0]['ID'];?>"></td>
</tr>

<tr>
<td>Name:</td>
<td><input type="text" name="txtName" size="30" value="<?php echo $ho[0]['Name'];?>"></td>
</tr>

<tr>
<td>Laptop Name :</td>
<td><input type="text" name="txtLap" size="30" value="<?php echo $ho[0]['Comp_name'];?>"></td>
</tr>

<tr>
<td>Model Number:</td>
<td><input type="text" name="txtMod" size="30" value="<?php echo $ho[0]['Model_no'];?>"></td>
</tr>

<tr>
<td>Address:</td>
<td><textarea name="txtAdd" cols="30" rows="5"><?php echo $ho[0]['Address'];?></textarea></td>
</tr>

<tr>
<td>Installment:</td>
<td><select name="txtIns">
  <?php
			  if($ho[0]['Installment']=='6')
			  {
		    ?>
            
<option value="6" selected>6 Months</option>
<option value="12">12 Months</option>
<option value="18">18 Months</option>

  <?php
			  }
		elseif($ho[0]['Installment']=='12')
		{
			?>
<option value="6" >6 Months</option>
<option value="12" selected>12 Months</option>
<option value="18">18 Months</option>
		<?php
		}
	else {
		?>
<option value="6" >6 Months</option>
<option value="12" >12 Months</option>
<option value="18" selected>18 Months</option>
		<?php
		}?>	</select></td></tr>
<tr>
<td>Pay Option:</td>
<td><input type="text" name="txtPay" size="30" value="<?php echo $ho[0]['Pay_option'];?>"></td>
</tr>

<tr>
<td>Status:</td>
<td><select name="txtStatus">
  <?php
			  if($ho[0]['Status']=='Pending')
			  {
		    ?>
            
<option value="Pending" selected>Pending</option>
<option value="Approved">Approved</option>

  <?php
			  }
		else
		{
			?>
       <option value="Pending">Pending</option>
       <option value="Approved"  selected>Approved</option>
		<?php
		}
		?>
        </select></h3></td></tr>

<tr><td>&nbsp </td></tr>

<tr>
<td colspan="2" align="center"><input type="submit" class="calbtn" name="btnUpdate" value="Update"></td>
</tr>
</form>
</center>