<div class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <div class="navbar-header">
                        <button class="navbar-toggle" data-target="#mobile_menu" data-toggle="collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                        <a href="#" class="navbar-brand">YAMBALIA</a>
                    </div>

                    <div class="navbar-collapse collapse" id="mobile_menu">
                        <ul class="nav navbar-nav">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="#" id="whyBtn">Why???</a></li>
                            <li><a href="ranking.php">Ranking</a></li>

                        </ul>


                        <ul class="nav navbar-nav navbar-right">
                            <?php if(!isset($_SESSION['user'])){ ?> 
                            <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-log-in"></span> Login / Sign Up <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="login.php">Login</a></li>
                                    <li><a href="register.php">Sign Up</a></li>
                                </ul>
                            </li>
                            <?php } 
                            else{
                            ?>
                            <li><a href="index.php?logout=true"><span class="glyphicon glyphicon-log-out"></span> Log Out</span></a>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script>
    $(document).ready(function(){
                $("#whyBtn").click(function(){
                    Swal.fire({
                        title: 'I Don\'t know either',
                        text: 'Just keep on clicking tho...',
                        imageUrl: 'img/idk.gif',
                        imageWidth: 300,
                        imageHeight: 300,
                        imageAlt: 'Custom image',
                    })
                });
            });
</script>