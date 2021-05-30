 <?php
 session_start();
 
if(isset($_POST['btncalculate']))
{
	  $NAM=$_POST['txtname'];
	  $MOD=$_POST['txtmodel'];
	   $PRIC=$_POST['txtprice'];
	    $DOW=$_POST['txtdown'];
		 $INS=$_POST['txtins'];
}

?>	
<div class="wrap">
<div class="welcomeBar"> Computer Details </div>
<table cellpadding="5" cellspacing="3" width="95%">
<tr style="background-color: #CCC; width:95%">
<h2><td>Computer Name:</td>
<td><?php echo $NAM;?></td></h2>
</tr>
<tr style="background-color:#CCC;">
<h2> <td>Model Number:</td>
<td><?php echo $MOD;?></td></h2>
</tr>
<tr style="background-color: #CCC">
<h2> <td>Price:</td>
<td><?php echo "RKR&nbsp". $PRIC;?></td></h2>
</tr>
</table>
<br><br><br>

<div class="welcomeBar"> Initial payment</div>
<table cellpadding="5" cellspacing="3" width="95%">
<tr style="background-color: #CCC; width:95%">
<h2><td>Down payment:</td>
<td><?php echo "RKR&nbsp". $DOW;?></td></h2>
</tr>
</table>
<br><br><br>
<div class="welcomeBar"> Monthly Installments</div>
<table cellpadding="5" cellspacing="3" width="95%">
<tr style="background-color: #CCC; width:95%">
<h2><td>Monthly Installments:</td>
<td><?php  
     if($INS==6)
		 { 
	         $dd=$PRIC-$DOW;
	         $tot=$dd*1.25;
		     $sum =$tot/6;
		     echo "RKR&nbsp&nbsp". (int)$sum. "&nbsp will be 6 equal installments of laptop";
		 
		 }
   
   elseif($INS==12)
		 { 
	         $dd=$PRIC-$DOW;
	         $tot=$dd*1.45;
		     $sum =$tot/12;
		     echo "RKR&nbsp&nbsp". (int)$sum. "&nbsp will be 12 equal installments of laptop";
		 }
	
	elseif($INS==18){
	         $dd=$PRIC-$DOW;
	         $tot=$dd*1.65;
		     $sum =$tot/18;
		     echo "RKR &nbsp&nbsp". (int)$sum. "&nbsp will be 18 equal installments of laptop";
			
		}?></td></h2>
</tr>
</table><br><br><br>
<center>
<div class="welcomeBar"> Apply for this </div><br><br>

<div id="wrapper">
<table width="50%" border="0" id="RegMem">

<form action="home.php?mlink=applied.php" method="post">
	<tr>
    	<td>Name</td>
        <td><input type="text" name="txtname" size="31" value="<?php echo $_SESSION['nm']?>"></td>
    </tr>
    
    <tr>
    	<td>Laptop Name:</td>
        <td><input type="text" name="txtLap" size="31" value="<?php echo $NAM;?>"> </td>
    </tr>
    
    <tr>
    	<td>Model Number:</td>
        <td><input type="text" name="txtModel" size="31" value="<?php echo $MOD;?>"></td>
    </tr>
	
	<tr>
    	<td>Enter Address:*</td>
        <td><textarea cols="30" rows="5" name="txtAddress" ></textarea></td>
    </tr>
	
    <tr><td>&nbsp </td></tr>
    
	<tr>
        <td> Installment:*</td> 
        <td>
		<select name="txtIns">
		<option disabled selected> Select Installment</option>
        <option value="6"> 6 months</option>
        <option value="12"> 12 months</option>
        <option value="18?>"> 18 months</option>
		</select></td>
    </tr>
    
    <tr><td>&nbsp </td></tr>
	
      <tr>
        <td> Payment option:*</td> 
		<td>
        <select name="txtCash">
        <option disabled selected> Select Payment</option>
        <option value="cash"> Cash</option>
		</select></td>
    </tr>
   <tr><td>&nbsp </td></tr>
   
     <tr>	
        <td colspan="3" align="center" ><input type="submit" class="applybtn" name="btnapply" value="Apply"></td>
     </tr>
    
</form>
</table>
</center>
<br><br><br>
<br><br><br>
</div>
</div>