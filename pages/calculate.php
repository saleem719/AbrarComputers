<?php
session_start();
if(isset($_GET['modno']))
{
	$ModelNo = $_GET['modno'];
	$mod = get_a_laptop($ModelNo);
	}
?>
<div class="welcomeBar"> Calculate installment</div><br><br>
<center>
<table width="40%">
<form action="home.php?mlink=final.php" method="post">
<tr>
<td>Laptop Name:</td>
<td><input type="text" name="txtname" size="30" readonly value="<?php echo $mod[0]['Laptop_name'];?>"><br></td>
</tr>
<tr>
<td>Model Number: </td>
<td><input type="text" name="txtmodel" size="30" readonly value="<?php  echo $mod[0]['Model_number'];?>"><br></td>
</tr>
<tr>
<td>Total Price:</td> 
<td><input type="text" name="txtprice" size="30"  readonly value="<?php  echo $mod[0]['Total_amount'];?>"><br></td>
</tr>
<tr>
<td>Down payment:</td>  
<td><input type="text" name="txtdown" size="30" readonly value="<?php  echo $mod[0]['Down_payment'];?>"><br></td> 
</tr>
<tr>
<td> Installment:</td> 
<td><select name="txtins">
<option disabled selected> Select Installment</option>
<option value="6"> 6 months</option>
<option value="12"> 12 months</option>
<option value="18"> 18 months</option></select></h3></td></tr>
<tr>
<td>&nbsp;</td> 
</tr>
<tr>
<td colspan="3" align="center"> <input type="submit" name="btncalculate" class="calbtn"  value="Calculate"></td>
</tr>
 </form>
 </table>
 <hr>
  <br><br><br><br><br><br>
	
	
  
  
  
 </center>

 