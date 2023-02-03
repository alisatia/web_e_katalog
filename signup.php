<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['user']) && isset($_POST['password'])
    && isset($_POST['email']) && isset($_POST['re_password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['user']);
	$pass = validate($_POST['password']);
	$re_pass = validate($_POST['re_password']);
	$email = validate($_POST['email']);
	$user_data = 'user='. $uname. '&email='. $email;
	
	if (empty($uname && $email && $pass)) {
		header("Location: signup_form.php?error=lengkapi form&$user_data ");
	    exit();
	}else if($pass !== $re_pass){
        header("Location: signup_form.php?error=password tidak sama&$user_data");
	    exit();
	}else {
	    $sql = "SELECT * FROM tb_user WHERE email='$email' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: signup_form.php?error=email $email  sudah digunakan&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO tb_user ( email, username, password) VALUES('$email', '$uname', '$pass')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: login.php");
	         exit();
           }else {
	           	header("Location: signup_form.php?error=error&$user_data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: signup_form.php");
	exit();
}