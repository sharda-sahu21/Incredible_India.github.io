


<?php include 'header.php'; ?>

<main class="content">
    <div class="container-fluid p-0">

        <?php if(isset($_REQUEST['success'])) { ?>
            <p class="text-success">Successful</p>
        <?php } ?>

        <div class="mb-3">
            <h1 class="h3 d-inline align-middle"><center>Google Map</center></h1>
        </div>

        <?php


            $connect= mysqli_connect("localhost" , "root" ,"" ,"portfolio");
            $query= "SELECT place, link FROM addmap2 ORDER BY p_id DESC limit 1";
            $result = mysqli_query($connect, $query);

            if($result && mysqli_num_rows($result)>0){
                
                $row = mysqli_fetch_assoc($result);
                $place = $row['place'];
                $link = $row['link'];
           


        ?>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h6><em> <?php echo $place ?></em></h6>
                    </div>
                
                    <div class="card-body">
                        <iframe
                          width="100%"
                          height="300"
                          frameborder="0" style="border:0"
                          referrerpolicy="no-referrer-when-downgrade"
                          src="<?php echo $link ?>"
                          allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>
        </div>

        <?php
         } 

            mysqli_close($connect);

            ?>



    </div>
   
</main>

<?php include 'footer.php'; ?>

<!-- <script type="text/javascript">
        function ValidateForm(){
            var text1 = document.getElementById("text1").value;
            if (text1 === "") {
                alert("Please enter the value ");
                return false;
            }else{
                return confirm("do you want to submit this form");
            }
        }
        
    </script>
 -->
<script src="js/app.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB6_SDhzbHz_ssSObg7xjD9hdCs7_yhGFg&callback=initMap" async defer></script>

