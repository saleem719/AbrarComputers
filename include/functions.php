<?php
function run_query($qry)
{
	$con = Connect();
	
	$rs = mysqli_query($con,$qry);
	
	$data = array();
	
	while($row = mysqli_fetch_assoc($rs))
	{
		$data[] = $row;
	}
	
	return $data;
}

function run_query_only($qry)
{
	$con = Connect();
	
	$rs = mysqli_query($con,$qry);
	
	return $rs;
}

	
/*----------------------------------  Customer  -----------------------------*/

function add_customer($nm,$em,$pas,$gen,$cit,$sal,$num)
{
	$query = "insert into customer(Name,Email,Password,Gender,City,Salary,Contact_number)
		                    values('$nm','$em','$pas','$gen','$cit',$sal,$num)";
			  
	if(run_query_only($query))
	{
        $message="New User Rgistered successfully";
		}
	else
	{
		$message="Registration Failed";
		
	}
	return $message;
}

function check_customer($ema,$pass)
{
	$query = "SELECT * FROM customer WHERE Email='$ema' and Password='$pass'";
	
	$rs = run_query_only($query);
	if(mysqli_num_rows($rs)==0)
	{
		$ans = false;
		}
		else
		{
			$ans = true;
			}
			
	return $ans;
	}
	
function find_customer($emai,$pas)
{
	$query ="select * from customer where Email='$emai' and Password='$pas'";
	
	$record = run_query($query);
	
	return $record;
}

function update_customer($cid,$name,$em,$pas,$gen,$city,$sal,$cel)
{
	$query = "update customer set 
	Name='$name', 
	Email='$em', 
	Password='$pas',
	Gender='$gen', 
	City='$city', 
	Salary='$sal', 
	Contact_number='$cel'
	where ID=".$cid;
	$rs = run_query_only($query);
	return $rs;	
}



function delete_customer($userId)
{
	$query = "delete FROM customer where ID='$userId'";
	
	$records = run_query_only($query);
	
	return $records;
}
	

function get_laptops()
{
	$query = "SELECT * FROM laptop_information";
	
	$records = run_query($query);
	
	return $records;
}

function get_a_laptop($model)
{
	$query = "SELECT * FROM laptop_information where Model_number=".$model;
	
	$records = run_query($query);
	
	return $records;
}

function lease_laptops()
{
	$query = "SELECT * FROM laptop_lease";
	
	$records = run_query($query);
	
	return $records;
}


function get_customer()
{
	$query ="select * from customer";
	
	$record = run_query($query);
	
	return $record;
}


function get_a_customer($cid)
{
	$query ="select * from customer where ID='$cid'";
	
	$record = run_query($query);
	
	return $record;
}


/*----------------------------------  user applied  -----------------------------*/

function user_apply($usrid,$Name,$Comp_name,$Model_no,$Address,$Installment,$Pay_option,$Status)
{
	$query = "insert into users_applied (
	user_id,
	Name, 
	Comp_name, 
	Model_no, 
	Address, 
	Installment, 
	Pay_option,
	Status)
	values('$usrid','$Name', '$Comp_name', '$Model_no', '$Address', '$Installment','$Pay_option','$Status')";
	
	$record = run_query_only($query);
	
	return $record ;
}

function applied_users($usr)
{
	$query = "SELECT * FROM users_applied where user_id='$usr'";
	
	$records = run_query($query);
	
	return $records;
}

function get_a_applieduser($usr)
{
	$query = "SELECT * FROM users_applied where ID='$usr'";
	
	$records = run_query($query);
	
	return $records;
}

function get_pendings()
{
	$query = "SELECT * FROM users_applied";
	
	$records = run_query($query);
	
	return $records;
}



/*----------------------------------  Admin  -----------------------------*/


function check_admin($em,$pas)
{
	$query = "SELECT * FROM admin WHERE Email='$em' and Password='$pas'";
	
	$rs= run_query_only($query);
	if(mysqli_num_rows($rs)==1)
	{
		$ans = true;
		}
		else
		{
			$ans = false;
			
			}
	return $ans;
	}


	
function update_status($cid,$nam,$cnam,$mno,$addr,$inst,$pay,$state)
{
	$query = "update users_applied set 
		Name='$nam', 
		Comp_name='$cnam', 
		Model_no='$mno',
	    Address='$addr', 
		Installment='$inst', 
		Pay_option='$pay', 
		Status='$state'
	where ID=".$cid;
	$rs = run_query_only($query);
	return $rs;	
}
	

function delete_request($uid)
{
	$query = "delete FROM users_applied where ID='$uid'";
	
	$records = run_query_only($query);
	
	return $records;
}
	

?>