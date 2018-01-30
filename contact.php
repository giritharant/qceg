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
    
    <script src="js/jquery.sticky.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/main.js"></script>
	</head>
	<body>
	
	
	<nav id="navigation" style="margin-top:91px">
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
                                  <a class="navbar-brand" href="index.php">
                                      <h3>Q-CEG</h3>
                                  </a>

                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                              <ul class="nav navbar-nav navbar-right" id="top-nav">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="about.php">about us</a></li>
                                <li><a href="search.php">Search Questions</a></li>
                                <li><a href="upload.php">Upload Questions</a></li>
                                <!--li><a href="#subscribe">news</a></li-->
                                <li><a href="#">contact</a></li>
                                <li><a href="logout.php"><?php session_start();if(isset($_SESSION['u_name'])){echo "Log Out";} ?></a></li>
                                <li><a href="#"><?php if(isset($_SESSION['u_name'])){echo "Hi ".$_SESSION['u_name'];} ?></a></li>
                              </ul>
                            </div><!-- /.navbar-collapse -->
                          </div><!-- /.container-fluid -->
                        </nav>
                    </div>
                </div><!-- .col-md-12 close -->
            </div><!-- .row close -->
        </div><!-- .container close -->
	</nav><!-- header close -->
    
    <section id="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <h1 class="heading wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">info@qceg.in</h1>
                        <h3 class="title wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">Request <span>Question</span> </h3>
                        <!--form-->
                        <form class="form-horizontal" role="form" action="request.php" method="POST">
                        <div class="form-group">
							<label class="control-label col-sm-2" for="city">Semester:</label>
							<div class="col-sm-10">
							<select class="form-control" name="sem" id="city" onchange="configurerest(this,document.getElementById('rest'))">
							<option value="">---Select Semester--</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
                            <option value="4">4</option>
							</select>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="Hotel">Subject:</label>
							<div class="col-sm-10">
							<select class="form-control" name="sub" id="rest">
							<option value="">---select subject----</option>
							</select>
							</div>
						</div>
                        <div id="year" class="form-group">
							<label class="control-label col-sm-2" for="Hotel">Year:</label>
							<div class="col-sm-10">
							<select class="form-control" name="year" id="rest">
							<option value="">---select Type----</option>
                            <option value="2014">2014</option>
							<option value="2015">2015</option>
                            <option value="2016">2016</option>
							</select>
							</div>
						</div>
                        
                        <div class="form-group">
							<label class="control-label col-sm-2" for="city">Type:</label>
							<div class="col-sm-10">
							<select class="form-control" name="type" id="type" onchange="java_script_:show(this.options[this.selectedIndex].value)">
							<option value="">---Select Type--</option>
							<option value="semester">Semester</option>
							<option value="assesment">Assesment</option>
							</select>
							</div>
						</div>
						<div id="batch" class="form-group">
							<label class="control-label col-sm-2" for="Hotel">Batch:</label>
							<div class="col-sm-10">
							<select class="form-control" name="batch" id="rest">
							<option value="">---select Type----</option>
                            <option value="G">G</option>
							<option value="H">H</option>
                            <option value="I">I</option>
							</select>
							</div>
						</div>
                        
                        
                        <button class="btn btn-default wow bounceIn" role="button" type=submit>Request Question</button>                        
						</form>
						<!--end of form-->
                    </div>
                </div><!-- .col-md-12 close -->
            </div><!-- .row close -->
        </div><!-- .container close -->
    </section><!-- #contact-us close -->
    <!--
    footer  start
    ============================= -->
    
    <!--
    footer-bottom  start
    ============================= -->
    <footer id="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="block">
                        <p>Copyright &copy; 2014 - All Rights Reserved.Design and Developed By Giritharan and Jeevasuriya</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
	</body>
</html>