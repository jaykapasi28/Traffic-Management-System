<?php
	include("connect.php");
	//Start session
	session_start();
	
	//Array to store validation errors
	$errmsg_arr = array();
	
	//Validation error flag
	$errflag = false;
	
	
	//Sanitize the POST values
	echo $login = htmlspecialchars($_POST['username']);
	echo $password = htmlspecialchars($_POST['pass']);
	
	//Input Validations
	if($login == '') 
	{
		$errmsg_arr[] = 'Username missing';
		$errflag = true;
	}
	if($password == '') 
	{
		$errmsg_arr[] = 'Password missing';
		$errflag = true;
	}
	
	//If there are input validations, redirect back to the login form
	if($errflag) 
	{
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		//header("location: index.php");
		//exit();
		echo "session error";
	}
	
	//Create query
	$qry="SELECT * FROM user WHERE username='$login' AND pass='$password'";
	$result=$db->query($qry);
	$count=$result->num_rows;
	//Check whether the query was successful or not
	if($result) 
	{
		if($result->num_rows>0) 
		{
			//Login Successful
			session_regenerate_id();
			$member = $result->fetch_array();
			$_SESSION['SESS_MEMBER_ID'] = $member['id'];
			$_SESSION['SESS_FIRST_NAME'] = $member['name'];
			$_SESSION['SESS_LAST_NAME'] = $member['position'];
			$_SESSION['SESS_PRO_PIC'] = $member['username'];
			session_write_close();
			header("location: index.php");
			exit();
		}
		else 
		{
			//Login failed
			//header("location: login.php");
			//exit();
			echo "error";
		}
	}
	else 
	{
		die("Query failed");
	}
?>