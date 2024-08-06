<?php
    
            
            $name=$_POST['f_name'];
            $p_holder=$_POST['p_holder'];
            $type =$_POST['f_type'];
            
            $connect=mysqli_connect("localhost","root","","portfolio");
            $query="insert into addform(F_name,P_holder, Type)values('$name' ,'$p_holder' ,'$type')";
            $result=mysqli_query($connect,$query);
                          
          if ($result) 
          {
            echo "<script>alert('Input field is inserted successfully')</script>";
            echo "<script>window.open('showform.php','_self')</script>";

            // echo "success";
            $alterQuery = "ALTER TABLE contact ADD COLUMN $name VARCHAR(255)";
            $alterResult = mysqli_query($connect, $alterQuery);

            if ($alterResult) {
                echo "<p>New column 'new_column' added successfully.</p>";
            } else {
                echo "<p>Error adding new column: " . mysqli_error($connect) . "</p>";
            }
          } 
          else 
          {
            echo "Error: " . mysqli_error($connect);

          }
                        
         
?>