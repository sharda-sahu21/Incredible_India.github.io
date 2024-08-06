<?php

	$name=$_FILES['file']['name'];
	$type=$_FILES['file']['type'];
	$size=$_FILES['file']['size'];
	$tmp_name=$_FILES['file']['tmp_name'];
	$error=$_FILES['file']['error'];
	// $date=$_POST['date'];



// if (($type=='image/pdf'){
	if ($size<80000000) {
		$location="upload_QR/".$name;
		move_uploaded_file($tmp_name,"upload_QR/".$name);


		$connect=mysqli_connect("localhost","root","","portfolio");
		$query="insert into addqr(QRfile)value('$location')";
		mysqli_query($connect,$query);
		if (mysqli_affected_rows($connect)>0) {
			// header("location:addQR.php?success");
			echo "<script>alert('QRfile has been uploaded successfully')</script>";
			echo "<script>window.open('showQR.php','_self')</script>";
		}
		else{
			// header("location:addvideo.php?error");
			echo "error ";
		}

	}

	else{
		 echo "check file size ";
		 }

// }

?> 



