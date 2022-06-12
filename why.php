<?php
	require_once('config.php');
	session_start();
?>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="clickme.css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    </head>
    <body>
        <?php include 'navbar.php'?>
        <div class="container-fluid">
            <div class="col col-md-3">
                <button type="button" class="btn btn-success btn-lg btn3d" style="width:300px;height: 130px;"><span class="glyphicon glyphicon-hand-up" style="font-size: 90px;"></span> CLICK ME!</button>
                <button type="button" class="btn btn-info btn-lg btn3d" style="width:300px;height: 130px;"><span class="glyphicon glyphicon-hand-up" style="font-size: 90px;"></span> CLICK HERE!</button>
                <button type="button" class="btn btn-danger btn-lg btn3d" style="width:300px;height: 130px;"><span class="glyphicon glyphicon-hand-up" style="font-size: 90px;"></span> CLICK THIS!</button>
            </div>
            <div class="col col-md-8">
                <div class="row">
                    
                    <h1>I DON'T KNOW ETHIER</h1>
                    <h4>just keep clicking them</h4>
                </div>
            </div>
            
        </div>
    </body>
</html>