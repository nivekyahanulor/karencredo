<?php

	ob_start();
	session_start();
	
	
	if(isset($_POST['login'])){
	include('database.php');

	$username = mysqli_real_escape_string($mysqli,$_POST['username']);
	$password = mysqli_real_escape_string($mysqli,md5($_POST['password']));


	$sql1      = "SELECT * FROM cvsu_system_user WHERE username='$username' AND BINARY password='$password'";
	$result1   = mysqli_query($mysqli, $sql1);

		$row1      = mysqli_fetch_assoc($result1);
		$rows1	   = mysqli_num_rows($result1);
		if($rows1==1){
			
			$_SESSION['name']          = $row1['firstname'].' '. $row1['lastname'];
			$_SESSION['fname']         = $row1['firstname'];
			$_SESSION['lname']         = $row1['lastname'];
			$_SESSION['id']            = $row1['id'];
			$_SESSION['email']         = $row1['email'];
			$_SESSION['contact']       = $row1['contact'];
			
			
			echo "success";
			
		} else {
			
			echo "error";
			
		}
	}
	