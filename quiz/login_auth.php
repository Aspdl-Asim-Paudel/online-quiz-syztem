<?php
	include 'db_connect.php';
	session_start();

	extract($_POST);
	$type = '';
	$qry = $conn->query("SELECT * FROM users where username='$username' and password = '$password' $type ");
	if($qry->num_rows > 0){
		foreach($qry->fetch_array() as $k => $val){
			if($k != 'password')
			$_SESSION['login_'.$k] = $val;
		}
        header('Location:home.php');
	}else{
        location.replace('home.php');
        echo "Incorrect username or password." ;
	}
header('Location:home.php');
?>