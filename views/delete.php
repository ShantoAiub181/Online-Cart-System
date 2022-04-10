<?php 
	
	include('header.php');
	require_once('../model/usersModel.php');
	$id = $_REQUEST['id'];
	$user = getUserById($id);
	//print_r($user);

	$con = deleteUser($id);


?>
