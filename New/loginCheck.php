<?php
session_start();
include "./model/db.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		 echo "Fill all the fields!";
	    exit();
	}else if(empty($pass)){
        echo "Fill all the fields!";
	}else{
		$sql = "SELECT * FROM users WHERE username='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) == true) {
			$row = mysqli_fetch_assoc($result);
            if ($row['username'] == $uname && $row['password'] == $pass) {
            	$_SESSION['username'] = $row['username'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: ./view/Admin_Home.html");
		        exit();
            }else{
			echo "Incorect User name or password";
			}
		}else{
			echo "Incorect User name or password";
		}
	}

}else{
	header("Location: login.php");
	exit();
}
