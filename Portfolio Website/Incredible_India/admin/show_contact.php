 <?php include 'header.php';?>

<main class="content">
   <div class="container-fluid p-0">
        <div class="box">
          <div class="box-head">

            <?php if(isset($_REQUEST['success'])){ ?>
                <p class="text-success">Successfull </p>
            <?php } ?>

           <h1><center> Contact LIST</center></h1>

          <?php
              $connect = mysqli_connect("localhost", "root", "", "portfolio");
              $query = "SELECT * FROM contact LIMIT 1"; // Limit to fetch only one row
              $result = mysqli_query($connect, $query);

              // Fetch columns from the result
              $fields = mysqli_fetch_fields($result);
          ?>

           <table class="table table-bordered table-striped">
                <tr>

                  <th>S.No.</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Status</th>
                  <th>Msg</th>
                  <?php
                  // Create table headers dynamically based on column names
                  foreach ($fields as $field) {
                      echo "<th>" . ucfirst($field->name) . "</th>";
                  }
                  ?>
                    
                </tr> 
                 
                <?php
                $connect=mysqli_connect("localhost","root","","portfolio");
                $query="select * from contact order by id DESC";
                $result=mysqli_query($connect,$query);
               
                    if (mysqli_affected_rows($connect)>0) {
                         $sn=1;
                        while ($key=mysqli_fetch_assoc($result)) {

                           echo "<tr>";
                            foreach ($fields as $field) {
                                echo "<td>" . htmlspecialchars($key[$field->name]) . "</td>";
                            }
                            echo "</tr>";

                        ?>

                          <tr>
                            <td><?php echo $sn++;?></td>
                            <td><?php echo $key['name']?></td>
                            <td><?php echo $key['email']?></td>
                            <td><?php echo $key['status']?></td>
                            <td><?php echo $key['msg']?> </td>

                          </tr>

                         


                <?php
                }
                
                }
                else{
                  echo "data not found";
                }

                ?>
              </table>
          </div>
      </div>     
  </div>
</main>

  <?php include 'footer.php';?>

  




