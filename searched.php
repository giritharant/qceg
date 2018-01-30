<?php
	session_start();
	if(!$_SESSION['u_name'])
	{
		
		header("location:login.html");
	}
    //$_SESSION["path"] = "question/".$_POST['sem']."/".$_POST['sub']."/".$_POST['year']."/".$_POST['type']."/".$_POST['batch']."/question.docx";
    //$file = "question/".$_POST['sem']."/".$_POST['sub']."/".$_POST['year']."/".$_POST['type']."/".$_POST['batch']."/question.docx";
    /*$file="question"."/".$_POST['sem']."/".$_POST['sub']."/".$_POST['year']."/".$_POST['type']."/".$_POST['batch'];
    if(!file_exists($file))
    {
         echo "<script>alert('OOPS :( there is an error try after sometime!!');
	            window.location.href='index.php';
        	</script>";
    }*/
	function docx2text($filename) {
        return readZippedXML($filename, "word/document.xml");
    }

    function readZippedXML($archiveFile, $dataFile) {
    // Create new ZIP archive
    $zip = new ZipArchive;

    // Open received archive file
    if (true === $zip->open($archiveFile)) {
        // If done, search for the data file in the archive
        if (($index = $zip->locateName($dataFile)) !== false) {
        // If found, read it to the string
        $data = $zip->getFromIndex($index);
        // Close archive file
        $zip->close();
        // Load XML from a string
        // Skip errors and warnings
        $xml = new DOMDocument();
        $xml->loadXML($data, LIBXML_NOENT | LIBXML_XINCLUDE | LIBXML_NOERROR | LIBXML_NOWARNING);
        // Return data without XML formatting tags
		
		/*$var = strstr($data,"marketing");
		$i=0;
		while($var[$i]!='.')
		{
			echo $var[$i];
			$i++;
		}*/
		
		return $data;
		
		
       // return strip_tags($xml->saveXML());
        }
        $zip->close();
    }

    // In case of failure return empty <string></string>
    return "";
}
    if(!isset($_SESSION["data"]))
    {
        $path="question/".$_POST['sem']."/".$_POST['sub']."/".$_POST['year']."/".$_POST['type']."/".$_POST['batch']."/".$_POST['sem'].$_POST['sub'].$_POST['year'].$_POST['type'].$_POST['batch'].".docx";
        $_SESSION["qid"]=$_POST['sem'].$_POST['sub'].$_POST['year'].$_POST['type'].$_POST['batch'];
        $_SESSION["data"]=docx2text($path); //
       echo $path;
    }
?>
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
                                <li><a href="contact.php">contact</a></li>
                                <li><a href="logout.php"><?php if($_SESSION['u_name']){echo "Log Out";} ?></a></li>
                                <li><a href="#"><?php if($_SESSION['u_name']){echo "Hi ".$_SESSION['u_name'];} ?></a></li>
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
                        <h1 class="heading wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms"> <span>Question</span> will be downloaded automatically</h1>
						<br>
                        <div class="row">
                            <div class="col-md-12">
                                <script>
                                (function() {
                                var cx = '007924012396538213502:thnsk6ukzyu';
                                var gcse = document.createElement('script');
                                gcse.type = 'text/javascript';
                                gcse.async = true;
                                gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
                                var s = document.getElementsByTagName('script')[0];
                                s.parentNode.insertBefore(gcse, s);
                                })();
                                </script>
                                <gcse:search></gcse:search>
                            </div>
                        </div>
                        
                        <div class="row">
				            <!--div class="col-md-12">'<?php echo $_SESSION["data"]; ?>'</div-->
                        <iframe style="border:none" src='<?php echo $path ?>'></iframe>
			</div>
                    </div>
                </div><!-- .col-md-12 close -->
            </div><!-- .row close -->
            <div class="row">
            <div class="col-md-12">
                <form action="comment.php" method="POST">
                <br>
                <br>
                <br>
                <div class="form-group">
                <label for="comment"><h3  class="heading wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms"><span>Comments</span></h3></label>
                <textarea class="form-control" rows="5" id="comment "name="data"></textarea>
            </div>
            </div>
	        <button class="btn btn-default wow bounceIn" role="button" type=submit>Comment</button>    
            </form>
            </div>
            <br><br><br>
            <div class="row">
            <div class="col-md-12">
               

                <!-- Contenedor Principal -->
	             '<?php
                    $con=mysqli_connect("localhost","root","","sdl");
                    $query = "SELECT * FROM comment WHERE qid ='$_SESSION[qid]'";
                    if($result=mysqli_query($con,$query))
                    {
                        while($row=mysqli_fetch_assoc($result))
                        {
	                     echo "<div class='comments-container'>
		                
		                <ul id='comments-list' class='comments-list'>
			            <li>
				        <div class='comment-main-level'>
					    <!-- Avatar -->
					
					    <!-- Contenedor del Comentario -->
					    <div class='comment-box'>
						    <div class='comment-head'>
							    <h6 class='comment-name by-author'>".$row['email']."</h6>
							    <i class='fa fa-check'></i>
						    </div>
						<div class='comment-content'>".
							$row['data']
						."</div>
					    </div>
				        </div>
				        </li>
                        </ul>
	                    </div>";
       
                        }	
                    }
                ?>'
            </div> 
            </div>  
        </div><!-- .container close -->
    </section><!-- #contact-us close -->
    <!--
    footer-bottom  start
    ============================= -->
    <br><br>
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