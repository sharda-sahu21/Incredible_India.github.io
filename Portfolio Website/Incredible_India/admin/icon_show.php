
    <?php include 'header.php';?>

    
  <main class="content">
    <div class="container-fluid p-0">

        <?php if(isset($_REQUEST['success'])){ ?>
            <p class="text-success">Successfull </p>
        <?php } ?>

          <div class="mb-3">
            <h1 class="h1 d-inline align-middle"><center>ICON SECTION</center></h1>
            
          </div>
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Insert the icons</h3>
              
            </div>
            <div class="card-body">
              
           <?php

            $connect=mysqli_connect("localhost","root","","portfolio");
            $query= "SELECT google, youtube, whatsapp, facebook, instagram, linkedin FROM addicon ORDER BY Id DESC
        ";
            $result=mysqli_query($connect,$query);
            if ($result && mysqli_num_rows($result) > 0){
                $icon = mysqli_fetch_assoc($result);

                $yt_url = $icon['youtube'];
                $fb_url = $icon['facebook'];
                $ggl_url = $icon['google'];
                $link_url = $icon['linkedin'];
                $inst_url = $icon['instagram'];
                $wapp_url = $icon['whatsapp'];

                echo '<ul class="list-group">';
            
                if (isset($yt_url) && !empty($yt_url)) {
                echo '<li class="list-group-item"><i class="fa-brands fa-youtube fa-2xl col-md-1"></i><a href="' . htmlspecialchars($yt_url) .'"> ' . htmlspecialchars($yt_url) . '</a></li>';
            }
            if (isset($fb_url) && !empty($fb_url)) {
                echo '<li class="list-group-item"><i class="fa-brands fa-square-facebook fa-2xl  col-md-1"></i><a href="'. htmlspecialchars($fb_url) .'">'. htmlspecialchars($fb_url) .'</a></li>';
            }
            if (isset($ggl_url) && !empty($ggl_url)) {
                echo '<li class="list-group-item"><i class="fa-brands fa-square-google-plus fa-2xl col-md-1"></i><a href="' . htmlspecialchars($ggl_url) .'">' . htmlspecialchars($ggl_url) .'</a></li>';
            }
            if (isset($link_url) && !empty($link_url)) {
                echo '<li class="list-group-item "><i class="fa-brands fa-linkedin fa-2xl col-md-1"></i><a href="'. htmlspecialchars($link_url) .'">'. htmlspecialchars($link_url) .' </a></li>';
            }
            if (isset($insta_url) && !empty($insta_url)) {
                echo '<li class="list-group-item"><i class="fa-brands fa-instagram fa-2xl col-md-1"></i><a href="'. htmlspecialchars($insta_url) .'">'. htmlspecialchars($insta_url) .'</a> </li>';
            }
            if (isset($wapp_url) && !empty($wapp_url)) {
                echo '<li class="list-group-item"><i class="fa-brands fa-square-whatsapp fa-2xl col-md-1"></i><a href="' . htmlspecialchars($wapp_url) .'">' . htmlspecialchars($wapp_url) .'</a> </li>';
            }

            echo '</ul>';
                
            }else {
            echo "No social icons found.";
        }

        mysqli_close($connect);
                  
        ?>





                   
                </div>
            </div>
         
    </div>
  </main>

      

      <?php include'footer.php'?>
   <!--  </div>
  </div> -->

  <script src="js/app.js"></script>


  <!-- button validation -->

 


</body>

</html>





