<html>
<title>Request a CD Brochure</title>
<head>

<style  TYPE="text/css">
  
body{background-color:#fff; color:#000; font-family:Geneva, Arial, Helvetica, sans-serif; }
h1{color:#990000;}

input{border:1px solid #D2C6B4; background-color:#5A312F; color:#000; font-family:Geneva, Arial, Helvetica, sans-serif; font-weight:normal;}
textarea{border:1px solid #D2C6B4; background-color:#5A312F;  color:#000; font-family:Geneva, Arial, Helvetica, sans-serif; font-weight:normal;}
.submit {color:#fff;}
.form{padding-top:20px;
}
  
</style>
</head>

<?php

if(isset($_POST['submitting']))
{
	$message = "Appointment Request\n\nFull Name: \n".$_POST['full_name']."\n\nAddress: \n".$_POST['address']."\n\nDay Phone: \n".$_POST['day_phone']."\n\nEmail Address: \n".$_POST['email']."\n\nAdditional Comments: \n".$_POST['comment'];
	$message = stripslashes($message);
	echo $message;
	
	$to = 'info@issaquahdental.com';
	$from = 'info@issaquahdental.com';
	$subject = "Appointment Request from ".$_POST['full_name'];
	$from = $_POST['email_from'];
	$headers = "From: $from";
	mail($to,$subject,$message,$headers);
	echo "An Appointment Request has been Sent to ".$to.".";
	
	exit();

}


?>
<div style="width:820px;">
	<img src="images/cd_brochure.jpg" border="0" style="float:left;"/>
	<div class="form">
	<form action="" method="post" target="_self" class="friend_form">


	Full Name:<br />
	<input name="full_name" type="text" size="40" /><br /><br />

	Address:<br />
	<input name="address" type="text" size="40" /><br /><br />

	Phone Number:<br />
	<input name="day_phone" type="text" size="40" /><br /><br />

	Email Address:<br />
	<input name="email" type="text" size="40" /><br /><br />

	Additional Information<br />
	<textarea name="comment" cols="36" rows="4"></textarea>
	<br /><br />

	<input name="submitting" type="hidden" value="submitting" />

	<input name="submit" class="submit" type="submit" value="Submit Request" />
	</form>
	</div>
</div>
</html>

