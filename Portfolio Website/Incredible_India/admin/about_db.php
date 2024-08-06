<?php
    
            $title=$_POST['title'];
            $descr=$_POST['descr'];
          
            
            $connect=mysqli_connect("localhost","root","","portfolio");
            $query="insert into about(Title,Descr)values('$title','$descr')";
            $result=mysqli_query($connect,$query);
            // mysqli_query($connect,$query);

                    // if (mysqli_affected_rows($connect)>0)
                          
                          if ($result) 
                          {
                            echo "<script>alert('About section has been edited successfully')</script>";
                            echo "<script>window.open('show_about.php','_self')</script>";

                            // echo "success";
                          } 
                          else 
                          {
                            echo "Error: " . mysqli_error($connect);

                          }
                        
         
?>