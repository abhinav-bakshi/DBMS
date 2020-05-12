<?php
session_start();
if(isset($_SESSION['user']))
	{
	$file = "pro-pic/".$_SESSION['user'].".jpg";
	unlink($file);
	header('location:home.php');
	}
else
	{
	header('location:first.php?err='.urlencode('Please Login First To Access This Page !'));
	}
?>