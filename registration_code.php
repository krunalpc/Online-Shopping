<?php     

//include connect.php page for database connection
include('connect.php');

$sesion = 0;

if(isset($_REQUEST['submit1'])!='')
{
	$email = $_REQUEST['email'];
	$password = $_REQUEST['password'];
	if($email=='' || $password=='' )
		{
			echo "please fill the empty field.";
		}
		else
		{
			//$sql = "SELECT FirstName FROM Customers WHERE Email = '"  .$email. "' AND password = '" .$password. "'";
			$sql = "call UserLogin()";
			$res=mysql_query($sql);
			if($res)
				{
					session_start();
					
					$sesion = 1;
					$_SESSION['dis_sesion'] = $sesion;
					
					include 'messages.php';
				}
				else
				{
					echo "There is some problem with login credential";
				}
		}
}


if(isset($_REQUEST['submit']))
{
	$uid = $_REQUEST['UserID'];
	$fname = $_REQUEST['firstName'];
	$lname = $_REQUEST['lastName'];
	$add1 = $_REQUEST['address1'];
	$add2 = $_REQUEST['address2'];
	$city = $_REQUEST['city'];
	$state = $_REQUEST['state'];
	$zip = $_REQUEST['zip'];
	$phone = $_REQUEST['phone'];
	$email = $_REQUEST['email'];
	$s_add1 = $_REQUEST['shipping_address1'];
	$s_add2 = $_REQUEST['shipping_address2'];
	$s_city = $_REQUEST['shipping_city'];
	$s_state = $_REQUEST['shipping_state'];
	$s_zip = $_REQUEST['shipping_zip'];
	$pass = $_REQUEST['password'];
	$r_pass = $_REQUEST['repassword'];
	if($uid=='' || $fname=='' || $lname=='' || $add1=='' || $city=='' || $state=='' || $zip==''|| $phone==''|| $email=='' || $s_add1=='' || $s_city==''|| $s_state=='' || $s_zip==''  || $pass=='' || $r_pass=='' )
		{
			echo "please fill the empty field.";
		}
		else
		{
			$sql = "call NewUser(uid, pass, fname, lname , add1, add2, city , stete, zip, phone, email)";
			//$sql="insert into Customers values('','".$uid."','".$fname."', '".$lname."', '".$add1."', '".$add2."', '".$city."', '".$state."','".$zip."', '".$phone."', '".$email."','".$s_add1."', '".$s_add2."', '".$s_city."','".$s_state."', '".$s_zip."', Now(), 1, '', '".$pass."')";
			$res=mysql_query($sql);
			if($res)
				{
					session_start();
					
					//$sesion = 1;
					//$_SESSION['dis_sesion'] = $sesion;
					
					$name = $fname . " " . $lname;
					$_SESSION['Display_Name'] = $name;
					
					$first = $fname;
					$_SESSION['Display_firse'] = $first;
					
					$subject = "Gretting From Product Hub";
					$message = "
					<html>
					<head>
					</head>
					<body>
						<H1>Product Hub</H1><br/><br/>
						<table>
							<tr>
								<th>Congratulation You are Sucessfully Registered at Product Hub.
								</th>
							</tr>
						</table>
					</body>
					</html>
					";
					
					$headers = "From: support@producthub.com";
					
					mail($email,$subject,$message,$headers);
					
					include 'messages.php';
				}
				else
				{
					echo "There is some problem in inserting record";
				}
		}
}

?>