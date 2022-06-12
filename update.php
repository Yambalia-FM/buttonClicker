<?php
$conn = new mysqli('localhost', 'root', '', 'infoans');
$name=$_POST["name"];
$ctgr=$_POST["ctgr"];
$sql="UPDATE users set fname='$name', lname='$ctgr' where id=1";
if($conn->query($sql)===TRUE){
    echo "DATA updated";
}
?>