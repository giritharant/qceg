<?php
$target_dir = "question/".$_POST['sem']."/".$_POST['sub']."/".$_POST['year']."/".$_POST['type']."/".$_POST['batch']."/";
$name="/".$_POST['sem'].$_POST['sub'].$_POST['year'].$_POST['type'].$_POST['batch'].".docx";
$target_file = $target_dir .$name; 
//basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$type = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
/*if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}*/
//if ($_FILES["fileToUpload"]["type"] == "application/msword")
//if($type=="docx")
//{
    if ($uploadOk == 0) {
        echo "<script>alert('OOPS :( there is an error try after sometime!!');
	            window.location.href='upload.php';
        	</script>";
        
// if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            $con=mysqli_connect("localhost","root","","sdl");
            $name=$_POST['sem'].$_POST['sub'].$_POST['year'].$_POST['type'].$_POST['batch'];
            $w="update request set process='1' where question='$name'";
            if(mysqli_query($con,$w))
            {
                echo "<script>alert('Thank You. The  question is successfully uploaded!!');
	            window.location.href='index.php';
        	    </script>";
        
	
            }
         
        } else {
            //echo "<script>alert('OOPS :( there is an error try after sometime!!');
	          //  window.location.href='upload.php';
        	//</script>";
            echo $target_file;
        
        }
    }
    if (file_exists($target_file)) {
        echo "<script>alert('We already having that Question thank you for your Concern!!');
	    window.location.href='upload.php';
	    </script>";
        $uploadOk = 0;
    }

//}
/*else {
   echo "<script>alert('As of now we accept only word files!!');
	window.location.href='upload.php';
	</script>";
    
}*/
// Check if file already exists

// Allow certain file formats
/*if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}*/
// Check if $uploadOk is set to 0 by an error

?>