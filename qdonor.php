
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
                                <li><a href="#">Upload Questions</a></li>
                                <!--li><a href="#subscribe">news</a></li-->
                                <li><a href="contact.php">contact</a></li>
                                <li><a href="logout.php"><?php if(isset($_SESSION['u_name'])){echo "Log Out";} ?></a></li>
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
    <section id="about-us">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        
                        <h1 class="heading wow fadeInUp" data-wow-duration="400ms" data-wow-delay="500ms" >Become <span>Q-Donor</span> </br>
                        </h1>
                        <p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="600ms">By Registering yourself as Q-Donor you can join with us in 
                        helping Computer science department students by uploading your assesment and semester question papers.Thank you!!!</p>
                        <form role=form action=registerd.php>
                        <button type=submit>Become a Q-Donor</button>
                        </form>
                    </div>
                </div><!-- .col-md-12 close -->
            </div><!-- .row close -->
        </div><!-- .containe close -->
    </section><!-- #call-to-action close -->
    <section id="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <h1 class="heading wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">upload <span>Question</span></h1>
						<br>
                        <!--form-->
                        <form class="form-horizontal" role="form" action="upload.php" method="POST">
                        <div class="form-group">
							<label class="control-label col-sm-2" for="city">Semester:</label>
							<div class="col-sm-10">
							<select class="form-control" name="city" id="city" onchange="configurerest(this,document.getElementById('rest'))">
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
							<select class="form-control" name="hotel" id="rest">
							<option value="">---select subject----</option>
							</select>
							</div>
						</div>
                        <div class="form-group">
							<label class="control-label col-sm-2" for="email">File:</label>
							<div class="col-sm-10">
								<input type="file" class="form-control" id="email" placeholder="Upload Your File here...">
							</div>
						</div>
                        <a class="btn btn-default wow bounceIn" role="button" onclick="form.submit();">Upload Your Question</a>                        
						</form>
						<!--end of form-->
                    </div>
                </div><!-- .col-md-12 close -->
            </div><!-- .row close -->
        </div><!-- .container close -->
    </section><!-- #contact-us close -->
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