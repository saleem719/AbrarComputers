<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<script type="text/javascript">

 var divs = new Array();
     divs[0] = "errfname";
	 divs[1] = "errpass";
	 divs[2] = "erremail";
	 divs[3] = "errgender";
	 divs[4] = "errcity";
	 divs[5] = "errsalary";
	 divs[6] = "errcontact";


function keyUpFunction()
{
	var inputs = new Array();
	    inputs[0] = document.getElementById("name").value;
		inputs[1] = document.getElementById("pass").value
		inputs[2] = document.getElementById("email").value;
		inputs[3] = document.getElementById("gender").value;
		inputs[4] = document.getElementById("city").value;
		inputs[5] = document.getElementById("salary").value;
		inputs[6] = document.getElementById("contact").value;
		
		
	var errors = new Array();
		errors[0] = "<span style='color:#F00;'>Please enter you name!</span>";
		errors[1] = "<span style='color:#F00;'>Password req!</span>";
		errors[2] = "<span style='color:#F00;'>Email Required!</span>";
		errors[3] = "<span style='color:#F00;'>Please select Gender</span>";
		errors[4] = "<span style='color:#F00;'>City Required!</span>";
		errors[5] = "<span style='color:#F00;'>Salary Required!</span>";
		errors[6] = "<span style='color:#F00;'>Contact Required!</span>";
		
		
		for(var i in inputs)
		{
			var div = divs[i];
			var err = errors[i];
			
			if(i==0)
			{
				if(inputs[0]==0)
				{
	document.getElementById("errfname").innerHTML=err;
			}
			else{
				document.getElementById(div).innerHTML =  "OK!";
			}
		}
			
			else if(i==1)
			{
				if(inputs[1]==0)
				{
	document.getElementById("errpass").innerHTML=err;
			}
			else{
				document.getElementById(div).innerHTML =  "OK!";
			}
		}
			
			
			else if(i==2)
			{
				var atpos = inputs[i].indexOf("@");
				var dotpo = inputs[i].lastIndexOf(".");
				
				if(atpos<1 || dotpo<atpos+2 || dotpo+2>inputs[i].length)
				{
					document.getElementById("erremail").innerHTML="<span style='color:#F00;'>Email Format Incorrect!</span>";
				}
				else
				{
					document.getElementById(div).innerHTML = "OK!";
				}
			}
			
			
			else if(i==3)
			{
				if(inputs[3]==0)
				{
					document.getElementById("errgender").innerHTML=err;
				}
				else
				{
					document.getElementById(div).innerHTML = "OK!";
				}
			}
			
			
			else if(i==4)
			{	
			   if(inputs[4]==0)
				{
					document.getElementById("errcity").innerHTML=err;
				}
				else
				{
					document.getElementById(div).innerHTML = "OK!";
				}
			}

		
	else if(i==5)
			{	
				if(inputs[5]==0)
				{
					document.getElementById("errsalary").innerHTML=err;
				}
				else
				{
					document.getElementById(div).innerHTML = "OK!";
				}
			}
		
		
	else if(i==6)
			{	
				if(inputs[6]==0)
				{
					document.getElementById("errcontact").innerHTML=err;
				}
				else
				{
					document.getElementById(div).innerHTML = "OK!";
				}
			}
			
		}
}

function finalValidate()
{
	
	valid = false;
	var c;
	var count = 0;
	
	for(c=0; c<6; c++)
	{
		var div = divs[c];
		
		if(document.getElementById(div).innerHTML == "OK!")
		{
			count = count + 1;
		}
		
	}
	
	if(count ==6)
	{
		valid = true;
	}
	else
	{
		valid=false;
		document.getElementById("errfinal").innerHTML="<span style='color:#F00;'> Please fill above fields</span>";
		
	}
	
	return valid;
}

</script>
</head>
<body>
<div class="welcomeBar">Registration Form</div><br>
<div id="wrapper">
<?php
if(isset($_GET['Mess']))
{
	$Mess = $_GET['Mess'];
	echo "<h2><font color='red'>".$Mess."</font></h2>";
}
?>
<table width="50%" border="0" id="RegMem">
<form action="home.php?mlink=Signup.php" method="post">
	<tr>
    	<td nowrap>Name</td>
        <td><input type="text" name="txtName" id="name" size="31" onKeyUp="keyUpFunction()"></td>
        <td nowrap><div id="errfname"></div></td>
    </tr>
    <tr><td>&nbsp </td> </tr>
	 <tr>
    	<td nowrap>Email: </td>
        <td><input type="text" name="txtEmail" id="email" size="31" onKeyUp="keyUpFunction()"></td>
        <td nowrap><div id="erremail"></div></td>
    </tr>
<tr><td>&nbsp </td> </tr>
    <tr>
    	<td nowrap>Password:</td>
        <td><input type="Password"  name="txtPass" id="pass" size="31" onKeyUp="keyUpFunction()"></td>
        <td nowrap><div id="errpass"></div></td>
    </tr>
    <tr><td>&nbsp </td> </tr>
    <tr>
    	<td nowrap>Gender:</td>
        <td><input type="Radio" name="txtGend" id="gender" value="Male" checked="checked">Male &nbsp &nbsp &nbsp
		 <input type="Radio" name="txtGend" id="gender" value="Female"> Female</td>
	</tr>
        <td nowrap><div id="errgender"></div></td>
    </tr>
    <tr><td>&nbsp </td> </tr>
    <tr>
    	<td nowrap>City:</td>
        <td><input type="text" name="txtCit" id="city" size="31" onKeyUp="keyUpFunction()"></td>
        <td nowrap><div id="errcity"></div></td>
    </tr>
    <tr><td>&nbsp </td> </tr>
      <tr>
    	<td nowrap>Salary: </td>
        <td><input type="text" name="txtSalary" size="31" id="salary" onKeyUp="keyUpFunction()"></td>
        <td nowrap><div id="errsalary"></div></td>
    </tr>
    <tr><td>&nbsp </td> </tr>
     <tr>
    	<td nowrap>Contact number:</td>
         <td><input type="text" name="txtContact" size="31" id="contact" onKeyUp="keyUpFunction()"></td>
        <td nowrap><div id="errcontact"></div></td>
    </tr>
  <tr><td>&nbsp </td> </tr>
         <tr class="loginButton">	
        <td colspan="3" align="center"><input type="submit" name="btnSignUp" value="Register" onClick="return finalValidate()">
         &nbsp; &nbsp; &nbsp;<a href="index.php?mlink=Mainlogin.php">LogIn</a>
            <div id="errfinal"></div>
        </td>
    </tr>
    <tr><td></td><tr>
    
</form>
</table>
</div>

<?php
if(isset($_POST['btnSignUp']))
{
	$name   =   $_POST['txtName'];
	$email  =   $_POST['txtEmail'];
	$pass   =   $_POST['txtPass'];
	$gender =   $_POST['txtGend'];
	$city   =   $_POST['txtCit'];
	$salary =   $_POST['txtSalary'];
	$contact =  $_POST['txtContact'];
	$check =check_customer($email,$pass);
    if($check == false)
	{	
	add_customer($name,$email,$pass,$gender,$city,$salary,$contact);
	echo "<script>window.location='home.php?mlink=Signup.php&Mess=User Registered Successfully'</script>";
	}
	else
	{
		echo "<script>window.location='home.php?mlink=Signup.php&Mess=Failed to register'</script>";
	}

}
?>
</body>
</html>