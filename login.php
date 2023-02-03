<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['user']) && isset($_POST['pass'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$user = validate($_POST['user']);
	$pass = validate($_POST['pass']);

	if (empty($user OR $pass)) {
		header("Location: login_form.php?error=username dan password kosong");
	    exit();
	}else if(empty($user)){
        header("Location: login_form.php?error=username kosong");
	    exit();
	}else if(empty($pass)){
        header("Location: login_form.php?error=password kosong");
	    exit();
	}else{
        
		$sql = "SELECT * FROM tb_user WHERE username='$user' AND password='$pass'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['username'] === $user && $row['password'] === $pass) {
            	$_SESSION['username'] = $row['username'];
            	$_SESSION['email'] = $row['email'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: crud.php");
		        exit();
            }else{
				header("Location: login_form.php?error=password atau username salah1");
		        exit();
			}
		}else{
			header("Location: login_form.php?error=password atau username salah2");
	        exit();
		}
	}
	
}else{
	header("Location: login_form.php");
	exit();
}
