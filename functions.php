<?php
require("config.php");

function getUserData($id){
	$array = array();
	$q = mysql_query("SELECT * FROM users WHERE id=".$id);
	while($r=mysql_fetch_assoc($q)){
		$array['id'] = $r['id'];
		$array['fname'] = $r['fname'];
		$array['lname'] = $r['lname'];
		$array['uname'] = $r['uname'];
		$array['contact'] = $r['contact'];
	}
	return $array;
}

function getId($username){
	$q = mysql_query("SELECT * FROM users WHERE id=".$username);
	while($r=mysql_fetch_assoc($q)){
		return $r['i'];
	}
}
?>