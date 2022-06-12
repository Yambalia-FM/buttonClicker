<?php include 'header.php'?>
<?php include 'getClicks.php'?>
        <div id="all" class="container-fluid">
            <div class="col-md-3">
                <button type="button" id="update_1" class="btn btn-success btn-lg btn3d" style="width:300px;height: 130px;"><span class="glyphicon glyphicon-hand-up" style="font-size: 90px;"></span> CLICK ME!</button>
                <button type="button" id="update_2" class="btn btn-info btn-lg btn3d" style="width:300px;height: 130px;"><span class="glyphicon glyphicon-hand-up" style="font-size: 90px;"></span> CLICK HERE!</button>
                <button type="button" id="update_3" class="btn btn-danger btn-lg btn3d" style="width:300px;height: 130px;"><span class="glyphicon glyphicon-hand-up" style="font-size: 90px;"></span> CLICK THIS!</button>
            </div>
            <div id="info" class="col-md-7">
                <br>
                <div class="col-4">
                    <select id="selectRanking" class="form-control" style="width: 150px;" onchange="rankDisplay();">
                        <option value="people" selected>Rank by People</option>
                        <option value="button">Rank by Button</option>
                    </select>
                </div>
                <div class="row" id="rankContent">
                    
                </div>
            </div>
        </div>
        <script src="js/update.js"></script>
        <script>
            $("#rankContent").load('people_rank.php');
            function rankDisplay(){
                var disp = document.getElementById("selectRanking").value;
                if(disp=="people"){
                    $("#rankContent").load('people_rank.php');
                }
                else{
                    $("#rankContent").load('button_rank.php');
                }   
            }
        </script>
<?php include 'footer.php';?>