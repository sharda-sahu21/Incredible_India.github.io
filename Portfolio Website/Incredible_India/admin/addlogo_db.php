<?php

	$name=$_FILES['file']['name'];
	$type=$_FILES['file']['type'];
	$size=$_FILES['file']['size'];
	$tmp_name=$_FILES['file']['tmp_name'];
	$error=$_FILES['file']['error'];
	// $date=$_POST['date'];



// if (($type=='image/pdf'){
	if ($size<80000000) {
		$location="logofile/".$name;
		move_uploaded_file($tmp_name,"logofile/".$name);


		$connect=mysqli_connect("localhost","root","","portfolio");
		$query="insert into addlogo(logo)value('$location')";
		mysqli_query($connect,$query);
		if (mysqli_affected_rows($connect)>0) {
			// echo "success";
			
			echo "<script>alert('New imgfile has been uploaded successfully')</script>";
            echo "<script>window.open('show_logo.php','_self')</script>";
		}
		else{
			header("location:addlogo.php?error");
			
		}

	}

	else{
		 echo "check file size ";
		 }

// }

?> 



