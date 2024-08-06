<?php
      if (isset($_REQUEST['submit']))
      print_r(hello);
      {
            $ggl= isset($_POST['Google']) ? $_POST['Google'] : '';
            $yt = isset($_POST['Youtube']) ? $_POST['Youtube'] : '';
            $wapp = isset($_POST['Whatsapp']) ? $_POST['Whatsapp'] : '';
            $fb = isset($_POST['Facebook']) ? $_POST['Facebook'] : '';
            $insta = isset($_POST['Instagram']) ? $_POST['Instagram'] : '';
            $link = isset($_POST['Linkedin']) ? $_POST['Linkedin'] : ''; 
          
            
            $connect=mysqli_connect("localhost","root","","portfolio");
            $query="insert into addicon(google, youtube, whatsapp, facebook, instagram, linkedin)values('$ggl', '$yt', '$wapp', '$fb', '$insta', '$link')";
            $result=mysqli_query($connect,$query);

    
                          
                          if ($result) 
                          {
                            echo "<script>alert('New icon has been Inserted successfully')</script>";
                            echo "<script>window.open('icon_show.php','_self')</script>";

                            // echo "success";
                          } 
                           else {
                                echo "Error: " . mysqli_error($connect);

                               }
                        
          }
?>