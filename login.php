<?php

if(isset($_POST['signIn']))
{
	//get form data
	$user = $_POST["user"];
	$password = $_POST["pw"];
	
	//connect to database
	$con = mysqli_connect('localhost', 'root', 'root','testsystem');
	
		// check connection
	if(mysqli_connect_errno())// any errors?
	{
		//if has errors
		echo "1: connection failed";//connection failed
		exit();	
	}
}


?>