<?php include 'header.php'?>
        <div id="all" class="container-fluid">
            <div class="col col-md-3">
                <button type="button" id="update_1" class="btn btn-success btn-lg btn3d" style="width:300px;height: 130px;"><span class="glyphicon glyphicon-hand-up" style="font-size: 90px;"></span> CLICK ME!</button>
                <button type="button" id="update_2" class="btn btn-info btn-lg btn3d" style="width:300px;height: 130px;"><span class="glyphicon glyphicon-hand-up" style="font-size: 90px;"></span> CLICK HERE!</button>
                <button type="button" id="update_3" class="btn btn-danger btn-lg btn3d" style="width:300px;height: 130px;"><span class="glyphicon glyphicon-hand-up" style="font-size: 90px;"></span> CLICK THIS!</button>
            </div>
            <div id="info" class="col col-md-8">
                <div class="row">
                    <div class="col col-md-5">
                    <?php include 'getClicks.php';?>
                        <h4>Your Stats today:</h4>
                                CLICK ME!<span class="pull-right strong"><?php echo number_format($_userTodayCount_1, 0, '.', ',');?></span>
                                 <div class="progress">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="12"aria-valuemin="0" aria-valuemax="100" style="width:<?php echo number_format($_userToday_1, 2, '.', ',').'%';?>"><?php echo number_format($_userToday_1, 2, '.', ',').'%';?></div>
                                </div>
                            
                                CLICK HERE!<span class="pull-right strong"><?php echo number_format($_userTodayCount_2, 0, '.', ',');?></span>
                                 <div class="progress">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="30"aria-valuemin="0" aria-valuemax="100" style="width:<?php echo number_format($_userToday_2, 2, '.', ',').'%';?>"><?php echo number_format($_userToday_2, 2, '.', ',').'%';?></div>
                                </div>
                            
                                CLICK THIS!<span class="pull-right strong"><?php echo number_format($_userTodayCount_3, 0, '.', ',');?></span>
                                 <div class="progress">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="8"aria-valuemin="0" aria-valuemax="100" style="width:<?php echo number_format($_userToday_3, 2, '.', ',').'%';?>"><?php echo number_format($_userToday_3, 2, '.', ',').'%';?></div>
                                </div>
                                <br>
                                <h3>Total Clicks Today</h3><span class="pull-right strong"><?php echo number_format($_totalToday, 0, '.', ',');?></span>
                                 <div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="8"aria-valuemin="0" aria-valuemax="100" style="width:<?php echo number_format($_totalTodayPercent, 2, '.', ',').'%';?>"><?php echo number_format($_totalTodayPercent, 2, '.', ',').'%';?></div>
                                </div>
                    </div>
                    <div class="col col-md-5">
                        <h4>This Month Stats:</h4>
                                CLICK ME!<span class="pull-right strong"><?php echo number_format($_userMonthCount_1, 0, '.', ',');?></span>
                                 <div class="progress">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="45"aria-valuemin="0" aria-valuemax="100" style="width:<?php echo number_format($_userMonth_1, 2, '.', ',').'%';?>"><?php echo number_format($_userMonth_1, 2, '.', ',').'%';?></div>
                                </div>
                            
                                CLICK HERE!<span class="pull-right strong"><?php echo number_format($_userMonthCount_2, 0, '.', ',');?></span>
                                 <div class="progress">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="57"aria-valuemin="0" aria-valuemax="100" style="width:<?php echo number_format($_userMonth_2, 2, '.', ',').'%';?>"><?php echo number_format($_userMonth_2, 2, '.', ',').'%';?></div>
                                </div>
                            
                                CLICK THIS!<span class="pull-right strong"><?php echo number_format($_userMonthCount_3, 0, '.', ',');?></span>
                                 <div class="progress">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="25"aria-valuemin="0" aria-valuemax="100" style="width:<?php echo number_format($_userMonth_3, 2, '.', ',').'%';?>"><?php echo number_format($_userMonth_3, 2, '.', ',').'%';?></div>
                                </div>
                                <br>
                                <h3>Total Clicks This Month</h3><span class="pull-right strong"><?php echo number_format($_totalMonth, 0, '.', ',');?></span>
                                 <div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="8"aria-valuemin="0" aria-valuemax="100" style="width:<?php echo number_format($_totalMonthPercent, 2, '.', ',').'%';?>"><?php echo number_format($_totalMonthPercent, 2, '.', ',').'%';?></div>
                                </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="js/update.js"></script>
<?php include 'footer.php';?>