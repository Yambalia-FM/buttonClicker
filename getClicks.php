<?php
                        // declaring variables daily
                        $_totalToday_1=0;
                        $_totalToday_2=0;
                        $_totalToday_3=0;
                        $_totalToday=0;
                        $_totalTodayPercent=0;
                        $_totalToday_all=0;
                        $_userTodayCount_1=0;
                        $_userTodayCount_2=0;
                        $_userTodayCount_3=0;
                        $_userToday_1=0;
                        $_userToday_2=0;
                        $_userToday_3=0;

                        // declaring variables monthly
                        $_totalMonth_1=0;
                        $_totalMonth_2=0;
                        $_totalMonth_3=0;
                        $_totalMonth=0;
                        $_totalMonthPercent=0;
                        $_totalMonth_all=0;
                        $_userMonthCount_1=0;
                        $_userMonthCount_2=0;
                        $_userMonthCount_3=0;
                        $_userMonth_1=0;
                        $_userMonth_2=0;
                        $_userMonth_3=0;

                        if(isset($_SESSION['user'])){
                            //getting all click records daily per user
                            $conn = new mysqli('localhost', 'root', '', 'infoans');
                            $sql = "SELECT * FROM click where user_id=".$_SESSION['user']['id']." AND date=(SELECT CURDATE())";
                            $result = $conn->query($sql);

                            //getting all click records for daily total
                            $sql1 = "SELECT * FROM click where date=(SELECT CURDATE())";
                            $result1 = $conn->query($sql1);

                            //getting all click records monthly per user
                            $sql3 = "SELECT SUM(clicks) AS sum_month, user_id, date, click_type FROM click where user_id=".$_SESSION['user']['id']." AND MONTH(date)=MONTH(NOW()) GROUP BY click_type;";
                            $result3 = $conn->query($sql3);

                            //getting all click records for monthly total
                            $sql2 = "SELECT * FROM click where MONTH(date)=MONTH(NOW());";
                            $result2 = $conn->query($sql2);

                            //get all records
                            while($row1=mysqli_fetch_assoc($result1)){
                                if($row1['click_type']==1){
                                    $_totalToday_1=$_totalToday_1+$row1['clicks'];
                                }
                                if($row1['click_type']==2){
                                    $_totalToday_2=$_totalToday_2+$row1['clicks'];
                                }
                                if($row1['click_type']==3){
                                    $_totalToday_3=$_totalToday_3+$row1['clicks'];
                                }
                                $_totalToday_all=$_totalToday_all+$row1['clicks'];
                            }
                            //get all records per user
                            while ($row=mysqli_fetch_assoc($result)) {   
                                if($row['click_type']==1){
                                    $_userToday_1=($row['clicks']/$_totalToday_1)*100;
                                    $_userTodayCount_1=$row['clicks'];
                                }
                                if($row['click_type']==2){
                                    $_userToday_2=($row['clicks']/$_totalToday_2)*100;
                                    $_userTodayCount_2=$row['clicks'];
                                }
                                if($row['click_type']==3){
                                    $_userToday_3=($row['clicks']/$_totalToday_3)*100;
                                    $_userTodayCount_3=$row['clicks'];
                                }
                                $_totalToday=($_userTodayCount_1+$_userTodayCount_2+$_userTodayCount_3);
                                $_totalTodayPercent=($_totalToday/$_totalToday_all)*100;
                            }

                            //monthly info
                            while($row2=mysqli_fetch_assoc($result2)){
                                if($row2['click_type']==1){
                                    $_totalMonth_1=$_totalMonth_1+$row2['clicks'];
                                }
                                if($row2['click_type']==2){
                                    $_totalMonth_2=$_totalMonth_2+$row2['clicks'];
                                }
                                if($row2['click_type']==3){
                                    $_totalMonth_3=$_totalMonth_3+$row2['clicks'];
                                }
                                $_totalMonth_all=$_totalMonth_all+$row2['clicks'];
                            }

                            while($row3=mysqli_fetch_assoc($result3)) {   
                                if($row3['click_type']==1){
                                    $_userMonth_1=($row3['sum_month']/$_totalMonth_1)*100;
                                    $_userMonthCount_1=$row3['sum_month'];
                                }
                                if($row3['click_type']==2){
                                    $_userMonth_2=($row3['sum_month']/$_totalMonth_2)*100;
                                    $_userMonthCount_2=$row3['sum_month'];
                                }
                                if($row3['click_type']==3){
                                    $_userMonth_3=($row3['sum_month']/$_totalMonth_3)*100;
                                    $_userMonthCount_3=$row3['sum_month'];
                                }
                                $_totalMonth=($_userMonthCount_1+$_userMonthCount_2+$_userMonthCount_3);
                                $_totalMonthPercent=($_totalMonth/$_totalMonth_all)*100;
                            }


                        }
                    ?> 