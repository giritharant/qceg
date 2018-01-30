<!DOCTYPE html>
<html class="no-js">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Q-CEG</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- CSS
        ================================================ -->
        <!-- Owl Carousel -->
		<link rel="stylesheet" href="css/owl.carousel.css">
        <!-- bootstrap.min css -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Font-awesome.min css -->
		<link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- Main Stylesheet -->
        <link rel="stylesheet" href="css/animate.min.css">

		<link rel="stylesheet" href="css/main.css">
        <!-- Responsive Stylesheet -->
		<link rel="stylesheet" href="css/responsive.css">
		<!-- Js -->
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> -->
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
    <!--script src="js/jquery.nav.js"></script-->
    <script src="js/jquery.sticky.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/main.js"></script>
    <script>
    $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
    });
    </script>

	</head>
	<body>
	<!--
	header-img start 
	============================== -->
    <section id="hero-area">
      <img class="img-responsive" src="images/1.jpg" alt="">
    </section>
	<!--
    Header start 
	============================== -->
	<nav id="navigation">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <nav class="navbar navbar-default">
                          <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                              </button>
                                  <a class="navbar-brand" href="#">
                                    <h3>Q-CEG</h3>
                                  </a>

                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                              <ul class="nav navbar-nav navbar-right" id="top-nav">
                                <li><a href="#">Home</a></li>
                                <li><a href="about.php">about us</a></li>
                                <li><a href="search.php">Search Questions</a></li>
                                <li><a href="upload.php">Upload Questions</a></li>
                                <!--li><a href="#subscribe">news</a></li-->
                                <li><a href="contact.php">contact</a></li>
                                <li><a href="logout.php"><?php session_start();if(isset($_SESSION['u_name'])){echo "Log Out";} ?></a></li>
                                <li><a href="#"><?php if(isset($_SESSION['u_name'])){echo "Hi ".$_SESSION['u_name'];} ?></a></li>
                                <li><a href="#" data-toggle="tooltip" title="Requested question status"><span class="glyphicon glyphicon-bell">
                                '<?php 
                                $con=mysqli_connect("localhost","root","","sdl");
                                $query = "SELECT * FROM request WHERE email ='$_SESSION[u_email]'";
                                if($result=mysqli_query($con,$query))
                                {
                                    $count=0;
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        if($row['process']==1)
                                            $count++;
                                    }
                                    echo "<span class='badge'>".$count."</span></span></a></li>";
                                }
                                ?>' 
                              </ul>
                            </div><!-- /.navbar-collapse -->
                          </div><!-- /.container-fluid -->
                        </nav>
                    </div>
                </div><!-- .col-md-12 close -->
            </div><!-- .row close -->
        </div><!-- .container close -->
	</nav><!-- header close -->
    <!--
    Slider start
    ============================== -->
    <section id="slider">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                        <br><br><br>
                        <h1 style="font-size:79px" class="text-center">Welcome to Q-CEG </h1><br>
                        <h3 class="text-center" style="font-size:28px">Don't Stress. Do Your Best. Forget the Rest.</h3>                        
                    </div>
                </div><!-- .col-md-12 close -->
            </div><!-- .row close -->
        </div><!-- .container close -->
    </section><!-- slider close -->
    <!--footer  start
    ============================= -->

    <!--
    footer-bottom  start
    ============================= -->
    <br><br><br>
    <footer id="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="block">
                        <p>Design and Developed By <a href="#">Giritharan and Jeevasuriya</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
	</body>
</html>