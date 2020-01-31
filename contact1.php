<?php
if(isset($_POST['submit']))
{
	$fullname=$_POST['fullname'];
	$emailfrom=$_POST['emailfrom'];
	$subject='HydroConsultant Query';
	$message=htmlspecialchars($_POST['message']);
	$emailto='nikhlesh.phone@gmail.com';
	$headers='From: '.$emailfrom."\r\n".'('.$fullname.')';
	echo $fullname.'<br>';
	echo $emailfrom.'<br>';
	echo $subject.'<br>';
	echo $message.'<br>';
	echo $emailto.'<br>';
	echo $headers.'<br>';
	if(mail($emailto, $subject, $comments, $headers))
	{
		echo "<script>alert('Thanks for sending us Email. We will contact you shortly.');</script>";
	}
	else
	{
		echo "<script>alert('Email could not be sent. Please try again later.');</script>";
	}
}
?>