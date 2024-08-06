<?php

    session_start();
    $uname=$_REQUEST['Uname'];
    $pwd=$_REQUEST['Pwd'];
    
    $connect=mysqli_connect("localhost","root","","portfolio");
    $query="select * from admin where Uname='$uname' and Pwd='$pwd'";
    $result= mysqli_query($connect,$query);
    if (mysqli_affected_rows($connect)>0) {
        while($key = mysqli_fetch_assoc($result) ){
           if ($pwd == $key['Pwd']) {
        
        $_SESSION['loggedin'] = true;
        $_SESSION['Uname'] = $uname;
        header("Location: index_admin.php");
        exit;
    } else {
        echo "Invalid password.";
    }
     }

 
}else {
        echo "Invalid username.";
     // echo "Error: " . mysqli_error($connect);
    }
        
 // connect->close();
?>


