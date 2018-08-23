<?php
	//session_start();
	/*$username_check="admin";
	$password_check="1234";*/


	$username = $_POST["username"]; 
	$password = $_POST["password"];

	$conn = mysqli_connect("localhost","root","","login");
	if(mysqli_connect_errno()){
		echo " Mysql Error :".mysqli_connect_errno();
	}else{
		echo"Mysql connect";
		$strSQL = "SELECT * FROM users WHERE usersname = '$username' and password =  '$password' ";
		$result = mysqli_query($conn,$strSQL);
		$rowcount = mysqli_num_rows($result);
		if($rowcount > 0 ){
			header("location:index.html");

		}else{
			header("location:pages-login.html");
		}

		
	}
	mysqli_close($conn);




	/*echo "1: ".$Username_check."<br>"; 
	echo "2:".$Password_check."<br>"; 
	echo "3".$username."<br>";
	echo "4".$password;

	if(($username==$username_check)&&($password==$password_check)){
	session_register("Username");
	session_register("Password");
	header("location:index.html");
	}else header("location:pages-login.html");*/

?>