<?php

include "config.php";

if($_POST)
{
	$name=$_POST['name'];
	$number=$_POST['number'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	
	$sql="INSERT INTO `users`(`name`, `number`, `email`, `password`) VALUES ('".$name."','".$number."','".$email."','".$password."')";

	$query = mysqli_query($conn,$sql);
	if($query)
	{
		session_start();
		header('Location: home.php');
		echo "Done";
	}
	else
	{
		echo "Something went wrong";
	}
	
	}
?>