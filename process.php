<?php
	require_once('config.php');	

if(isset($_POST)){
	$fname 			= $_POST['fname'];
	$lname 			= $_POST['lname'];
	$email			= $_POST['email'];
	$password	 	= sha1($_POST['password']);
	$contact		= $_POST['contact'];
	$uname			= $_POST['uname'];
	//$tablename 		= mysql_real_escape_string($_POST['email']);
	$stmt=$db->prepare("SELECT * FROM login WHERE email=?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();

	if(!$user){
		$sql="INSERT INTO users(fname, lname, uname, contact) VALUES(?,?,?,?);";
		$sql2="INSERT INTO login(email, password) VALUES(?,?)";
		$stminsert = $db->prepare($sql2);
		$result1=$stminsert->execute([$email, $password]);
		$stminsert = $db->prepare($sql);
		$result=$stminsert->execute([$fname, $lname, $uname, $contact]);
		if($result && $result1){
			echo 'Successfully Saved';
		}
		else{
			echo 'There were errors while saving the data';
		}
	}
	else{
		echo 'Username already Exist!';
	}
}
else{
	echo 'No data';
}