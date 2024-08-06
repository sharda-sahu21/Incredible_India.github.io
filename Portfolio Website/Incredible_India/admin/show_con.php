<?php include 'header.php';?>

<main class="content">
   <div class="container-fluid p-0">
        <div class="box">
            <div class="box-head">

                <?php if(isset($_REQUEST['success'])){ ?>
                    <p class="text-success">Successful</p>
                <?php } ?>

               <h1><center>Contact List</center></h1>

               <?php
               
               $connect = mysqli_connect("localhost", "root", "", "portfolio");
               $query = "SHOW COLUMNS FROM contact";
               $result = mysqli_query($connect, $query);
               // if (!$result) {
               //     die("Query failed: " . mysqli_error($connect));
               // }

               $fields = [];
               while ($row = mysqli_fetch_assoc($result)) {
                   $fields[] = $row['Field'];
               }

               // Fetch data rows
               $query = "SELECT * FROM contact ORDER BY id DESC";
               $result = mysqli_query($connect, $query);
               if (!$result) {
                   die("Query failed: " . mysqli_error($connect));
               }
               ?>

               <table class="table table-bordered table-striped">
                    <tr>
                      <th>S.No.</th>
                      <?php
                      // Create table headers dynamically based on column names
                      foreach ($fields as $field) {
                          echo "<th>" . ucfirst($field) . "</th>";
                      }
                      ?>
                    </tr> 
                     
                    <?php
                    if (mysqli_num_rows($result) > 0) {
                        $sn = 1;
                        while ($key = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>" . $sn++ . "</td>";
                            foreach ($fields as $field) {
                                echo "<td>" . htmlspecialchars($key[$field]) . "</td>";
                            }
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='" . (count($fields) + 1) . "'>Data not found</td></tr>";
                    }

                   mysqli_close($connect);
                    ?>
                </table>
            </div>
        </div>     
     </div>
</main>

<?php include 'footer.php';?>

<script src="js/app.js"></script>
