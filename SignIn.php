<?php
	session_start();
	
	if( isset($_REQUEST['submit'])){
		$uname = $_REQUEST['uname'];
		$password =  $_REQUEST['password'];
		$cn_password =  $_REQUEST['cn_password'];
		$name = $_REQUEST['name'];
		
		
		if(empty(trim($uname)) || empty(trim($password))){
			echo "Null submission found!";
		}else{

			$file = fopen('SignUp.txt', 'r');
			$user = fread($file, filesize('SignUp.txt'));
			$data = explode('|', $user);

			if( trim($data[0]) == $uname && trim($data[1]) == $password){
				$_SESSION['uname'] = $uname;
				$_SESSION['pass'] = $password;

				header("location: home.php");
			}else{
				echo "invalid uname/password";
			}
		}

	}else{
		//echo "invalid request! please login first!";
		header("location: Login.php");
	}
?>