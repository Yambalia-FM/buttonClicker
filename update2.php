<?php
require('config.php');
session_start();

if(!isset($_SESSION['user'])){
    echo "LOG IN TO CLICK";
}
else{
    $conn = new mysqli('localhost', 'root', '', 'infoans');
    $sql="SELECT * FROM click WHERE click_type=2 AND user_id=".$_SESSION['user']['id']." AND date=CURDATE()";
    $result = $conn->query($sql);
    $row=mysqli_fetch_assoc($result);
    if($row['clicks']>0 || !empty($row['clicks'])){
        $sql1="UPDATE click SET clicks=clicks+1 WHERE click_type=2 AND user_id=".$_SESSION['user']['id']." AND date=(SELECT CURRENT_DATE())";
        if($conn->query($sql1)===TRUE){
            echo "";
        }

    }
    else{
        $sql2="INSERT INTO click(click_type, user_id, date, clicks) values(2, ".$_SESSION['user']['id'].", CURRENT_DATE(),1)";
        if($conn->query($sql2)===TRUE){
            echo "";
        }
    }
}

?>