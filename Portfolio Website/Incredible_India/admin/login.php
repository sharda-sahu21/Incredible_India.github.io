

<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
   <link rel="stylesheet" type="text/css" href="css/login.css">
       
</head>
<body>

     

    <form action="log_db.php" method="post">
        <?php if(isset($_REQUEST['success'])){ ?>
              <p class="text-success">success</p>
    
    <?php } ?>
    
    	<h1><center>LOG IN </center></h1>
	
       
        <div class="container">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="Uname" required>
            <label for="pwd"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="Pwd" required>
            <button type="submit">Log In</button>
            
        </div>
       <!--  <div class="container" style="background-color:#f1f1f1">
            <button type="button" class="cancelbtn">Cancel</button>
            <span class="psw">Forgot <a href="#">password?</a></span>
        </div> -->
    </form>
  
</body>
</html>
