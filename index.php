
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Increadible India</title>
        

        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/light-box.css">
        <link rel="stylesheet" href="css/owl-carousel.css">
        <link rel="stylesheet" href="css/templatemo-style.css">
         <link rel="stylesheet" href="css/slidebar.css">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
        <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

       
        <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- --------------pause btn------------ -->

        <link rel="stylesheet" href="css/btn.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

          <!-- display google map using JS api -->

</head>

<body>

        <header class="nav-down responsive-nav hidden-lg hidden-md">
            <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!--/.navbar-header-->
            <div id="main-nav" class="collapse navbar-collapse">
                <nav>
                    <ul class="nav navbar-nav">
                        <li><a href="#top">Home</a></li>
                        <li><a href="#video">About</a></li>
                        <li><a href="#projects">Experiences</a></li>
                        <li><a href="#blog">Reach out</a></li>
                        <li><a href="#contact">Contact Us</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <div class="sidebar-navigation hidden-sm hidden-xs">
            <div class="img img-responsive" >
                <img src="img/india2.png" style="height: 165px; width: 295px; padding-left: 20px; padding-right: 20px; padding-top: 23px; position: absolute;" class="img-responsive" >
            </div>

           
            <nav>
                <ul>
                    <li>
                        <a href="#top" class="active">
                            <span class="rect"></span>
                            <span class="circle"></span>
                            Home
                        </a>
                    </li>
                     <li>
                        <a href="#video">
                            <span class="rect"></span>
                            <span class="circle"></span>
                            About
                        </a>
                    </li>
                    <li>
                        <a href="#featured">
                            <span class="rect"></span>
                            <span class="circle"></span>
                           Experiences
                        </a>
                    </li>
                    <li>
                        <a href="#projects">
                            <span class="rect"></span>
                            <span class="circle"></span>
                            Reach out
                        </a>
                    </li>
                     <li>
                        <a href="#blog">
                            <span class="rect"></span>
                            <span class="circle"></span>
                           QR Code
                        </a>
                    </li>
                   
                    <li>
                        <a href="#contact">
                            <span class="rect"></span>
                            <span class="circle"></span>
                            Contact Us
                        </a>
                    </li>
                </ul>
            </nav>

             <ul class="social-icons">
                 <li><a href="https://www.youtube.com/channel/UCqxfJDzd353BJLRIoDENNyA"><i class="fa fa-youtube"></i></a></li>
                 <li><a href="https://www.facebook.com/programmics.co.in"><i class="fa fa-facebook"></i></a></li>
                 <li><a href="https://x.com/i/flow/login?redirect_after_login=%2Fprogrammics"><i class="fa fa-twitter"></i></a></li>
                 <li><a href="https://in.linkedin.com/company/programmicstechnology"><i class="fa fa-linkedin"></i></a></li>
                 <li><a href="https://www.instagram.com/programmics/"><i class="fa fa-instagram"></i></a></li>
             </ul>
       
        </div> 


                        <?php
                            $connect = mysqli_connect("localhost", "root", "", "portfolio");
                          
                            
                            $query = "SELECT videofile FROM addvideo ORDER BY insertion_date DESC LIMIT 1" ;
                            $result = mysqli_query($connect, $query);
                            $vid = mysqli_fetch_assoc($result)
                            
                            // if (mysqli_num_rows($result) > 0) {
                                // while ($vid = mysqli_fetch_assoc($result)) {

                                // $b_id=$key['b_id'];

                        ?>  

                <div class="col-md-12" style="float: right;">
                        <div class="box-video"> 
                           
                            <div class="video-container" id="vido">

                                <video src="<?php echo '/Portfolio Website/Incredible_India/admin/'.$vid['videofile']; ?>" class="px-5" width="100%" height="auto"object-fit: cover;  autoplay muted loop></video> 
                               
                               
                                  <!-- <div class="bt-play">Play</div> -->
                            </div>
                          <!--  <button id="btn-play" onclick="myfunction()" class="btn btn-primary">Pause
                               <img src="img/button.png" alt="play" style="height: px; width: 200px; float: right ;">
                           </button>
 -->
                            <?php
                                 mysqli_close($connect);
                            ?>
                     </div>
                </div> 






  <!-- -------- about section -------------------- -->

    <div class="container col-10 " style="float: right;">
            <section id="video" class="content-section">
                <div class="row">
                    <div class="col-md-12">


                        <?php
                            $connect = mysqli_connect("localhost", "root", "", "portfolio");
                          
                            
                            $query = "SELECT * FROM about ORDER BY posted_at DESC LIMIT 1" ;
                            $result = mysqli_query($connect, $query);
                            $key = mysqli_fetch_assoc($result)

                        ?>

                        <div class="section-heading">
                            <h1>About the <em><?php echo $key['Title']; ?> </em></h1>
                            
                        </div>
                        <div class="text-content">

                            <p><?php echo $key['Descr']; ?></p>

                            <!-- <p>One of the oldest civilisations in the world, India is a mosaic of multicultural experiences. With a rich heritage and myriad attractions, the country is among the most popular tourist destinations in the world. It covers an area of 32, 87,263 sq. km, extending from the snow-covered Himalayan heights to the tropical rain forests of the south. As the 7th largest country in the world, India stands apart from the rest of Asia, marked off as it is by mountains and the sea, which give the country a distinct geographical entity.</p> -->

                        </div>
                       
                    </div>
                </div>
            </section>


            <!-- ----------------end about-------------------- -->

 
           

     <!-- --------------------gallary section----------------------   -->
            <section id="featured" class="content-section">
                
                      <div class="col-md-12">
                            <div class="section-heading">
                                <h1>Immersive <br><em> Experiences</em></h1>
                                <p>In the land of opulence, let loose and discover yourself </p>
                            </div>
                
                                <div class="section-content">
                                    <div class="owl-carousel owl-theme">
                                        <div class="item">
                                            <div class="image">
                                                <img src="img/img1.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="image">
                                                <img src="img/img2.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="image">
                                                <img src="img/img3.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="image">
                                                <img src="img/img4.jpg" alt="">
                                            </div>
                                        </div>
                                         <div class="item">
                                            <div class="image">
                                                <img src="img/img17.jpg" alt="">
                                            </div>
                                        </div>
                                         <div class="item">
                                            <div class="image">
                                               <img src="img/img7.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="image">
                                                <img src="img/img8.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="image">
                                                 <img src="img/img11.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="image">
                                                <img src="img/img12.jpg" alt="">
                                            </div>
                                        </div>

                                        <?php

                                            $connect = mysqli_connect("localhost", "root", "", "portfolio");
                                          
                                            
                                            $query = "SELECT * FROM addcard" ;
                                            $result = mysqli_query($connect, $query);
                                            
                                            if (mysqli_num_rows($result) > 0) {
                                                while ($img = mysqli_fetch_assoc($result)) {

                                        ?>

                                        <div class="item">
                                            <div class="image">

                                                <img src="<?php echo '/Portfolio Website/Incredible_India/admin/'.$img['imgfile']; ?>" alt="">
                                                                            
                                            </div>
                                        </div>
                        
                                        <?php }
                                        } else {
                                            echo "No records found";
                                        }

                                        mysqli_close($connect);
                                        ?>
                                    </div>
                                </div>
                        </div>
                             
                </section>          

       
              <!-- ------------------------end gallary--------------------------- -->    




        
            <!-- -------------Map Section------------- -->

            <section id="projects" class="content-section">
                <div class="section-heading">
                    <h1>You can<br><em>Reach</em> us</h1>
                    <p>Praesent pellentesque efficitur magna, 
                    <br>sed pellentesque neque malesuada vitae.</p>
                </div>
                <div class="section-content">
                        
                        <?php
                           
                            $connect = mysqli_connect("localhost", "root", "", "portfolio");
                            $query = "SELECT latitude, longitude FROM addmap ORDER BY m_id DESC LIMIT 1";
                            $result = mysqli_query($connect, $query);

                            if ($result && mysqli_num_rows($result) > 0) {
                                $row = mysqli_fetch_assoc($result);
                                $latitude = $row['latitude'];
                                $longitude = $row['longitude'];
                            } else {
                               
                                $latitude = 21.2419335;
                                $longitude = 81.6464225;

                                 $MapUrl = "https://www.google.com/maps/api/js?key=" . urlencode($latitude) . "," . urlencode($longitude);
                            }

                           
                            mysqli_close($connect);
                    ?>


                    <!-- Display interactive map -->
                    <div id="map" style="height: 400px; width:100%;">
                        
                    </div>
                    <br><br>
                    <center>
                        <a class="btn btn-primary btn-lg" href="<?php echo $MapUrl; ?>" role="button" target="_blank" id="mapLink">Go to Map</a>
                    </center>
                    <br><br> 

                    <!-- <div id="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14874.982485650136!2d81.6489974!3d21.2419335!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a28dd106713a141%3A0xacfe4c9e888711a6!2sProgrammics%20Technology!5e0!3m2!1sen!2sin!4v1720171407171!5m2!1sen!2sin" width="600" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">h</iframe>

                      

                    </div> -->

                    
            </div>            
        </section>



        <!-- ----------------------QR code section------------------------ -->

        <section id="blog" class="content-section">
            <div class="section-heading">
                <h1>QR<br><em>Code</em></h1>
                <p>Curabitur hendrerit mauris mollis ipsum vulputate rutrum. 
                <br>Phasellus luctus odio eget dui imperdiet.</p>
            </div>
            <div class="section-content">
                <?php
                    $connect = mysqli_connect("localhost", "root", "", "portfolio");
                    
                    if (!$connect) {
                        die("Connection failed: " . mysqli_connect_error());
                    }
                    
                    $query = "SELECT * FROM addqr ORDER BY q_id DESC LIMIT 1";
                    $result = mysqli_query($connect, $query);
                    
                    if (!$result) {
                        die("Query failed: " . mysqli_error($connect));
                    }
                    
                    // Check if any rows were returned
                    if (mysqli_num_rows($result) > 0) {
                        $qr = mysqli_fetch_assoc($result);
                        $qrFilePath = '/Portfolio Website/Incredible_India/admin/' . $qr['QRfile'];

                        // Check if the file exists
                        if (isset($qrFilePath)) {
                ?>
                            <div class="container">
                                <img src="<?php echo $qrFilePath; ?>" class="centered-image" alt="QR_code">
                            </div>
                <?php
                        } else {
                            echo"does not";
                            
                        }
                    } else {
                        echo "No QR code found in the database.";
                    }
                    
                    mysqli_close($connect);
                ?>
            </div>
        </section>



                    <!-- ----------------------contact section------------------ -->


        <section id="contact" class="content-section">

             <div id="contact-content">
                <div class="section-heading">
                    <h1>Contact<br><em>Us</em></h1>
                    <p>India has a myriad of landscapes, great heritage and culture, varied flora and fauna. The country is the most preferred tourist destinations for tourists from all across the world for its picturesque landscapes</p>
                        
                </div>
                <div class="section-content">

                    <?php if(isset($_REQUEST['success'])){ ?>
                          <p class="text-success">Successfull </p>
                    <?php } ?>
                        

                    <form id="contact" action="connect_db.php" method="post">
                        <div class="row">
                            <div class="col-md-4">
                                <fieldset>
                                    <input name="name" type="text" class="form-control" id="name" placeholder="Your name..." required="">
                                </fieldset>
                            </div>

                            <div class="col-md-4">
                                <fieldset>
                                    <input name="email" type="email" class="form-control" id="email" placeholder="Your email..." required="">
                                </fieldset>
                            </div>
                                
                             <?php
                                    $connect = mysqli_connect("localhost", "root", "", "portfolio");
   
                                     $query = "SELECT * FROM addform ORDER BY F_id ASC " ;
                                     $result = mysqli_query($connect, $query);
                                        
                                    if (mysqli_num_rows($result) > 0) {
                                         while ($key = mysqli_fetch_assoc($result)) {

                            ?>

                            <div class="col-md-4">
                                <input name="<?php echo $key['F_name'] ?>" type="<?php echo $key['Type'] ?>" placeholder="<?php echo $key['P_holder'] ?>"  class="form-control">
                            </div>


                            <?php }

                                    } else {
                                        echo "No records found";
                                    }

                                    mysqli_close($connect);
                                    
                            ?>


                            <div class="col-md-12">
                                <fieldset>
                                    <input name="status" type="text" class="form-control" id="subject" placeholder="Subject..." required="">
                                </fieldset>
                            </div>
                            <div class="col-md-12">
                                <fieldset>
                                    <textarea name="msg" rows="6" class="form-control" id="message" placeholder="Your message..." required=""></textarea>
                                </fieldset>
                            </div>
                            <div class="col-md-12">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="btn">Send Message </button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div> 
            </div>
                
        </section>
    </div>            

                                  
           <!-- ---------------endcontact--------------------- -->
           
              
            
    <section class="footer">
            <p> &copy; Ministry of Tourism, Government of India</p>
    </section>
        </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script src="js/vendor/bootstrap.min.js"></script>
    
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

    <script>
        // Hide Header on on scroll down
        var didScroll;
        var lastScrollTop = 0;
        var delta = 5;
        var navbarHeight = $('header').outerHeight();

        $(window).scroll(function(event){
            didScroll = true;
        });

        setInterval(function() {
            if (didScroll) {
                hasScrolled();
                didScroll = false;
            }
        }, 250);

        function hasScrolled() {
            var st = $(this).scrollTop();
            
            // Make sure they scroll more than delta
            if(Math.abs(lastScrollTop - st) <= delta)
                return;
            
            // If they scrolled down and are past the navbar, add class .nav-up.
            // This is necessary so you never see what is "behind" the navbar.
            if (st > lastScrollTop && st > navbarHeight){
                // Scroll Down
                $('header').removeClass('nav-down').addClass('nav-up');
            } else {
                // Scroll Up
                if(st + $(window).height() < $(document).height()) {
                    $('header').removeClass('nav-up').addClass('nav-down');
                }
            }
            
            lastScrollTop = st;
        }
    </script>

    <!-- ----------------------play btn------------------- -->
    <script type="text/javascript">
        var vid = document.getElementById("vido");
        var btn = document.getElementById("btn-play");

        function myfunction() {
            if (vid.pause) {
                vid.play();
                btn.innerHTML= "Pause";

            }
            else{
                vid.pause();
                btn.innerHTML="Play";
            }
        }
    </script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>

    <!-- --------------------display google map dynamically------------------------------ -->


         <script>
         function initMap() {
            // Ensure these variables are defined and not empty
            const latitude = <?php echo json_encode($latitude); ?>;
            const longitude = <?php echo json_encode($longitude); ?>;


             console.log('Latitude:', latitude);
            console.log('Longitude:', longitude);

            if (!latitude || !longitude) {
                console.error('Invalid latitude or longitude');
                return;
            }


            
            // Create a map centered at the specified latitude and longitude
            const map = new google.maps.Map(document.getElementById("map"), {
                center: { lat: parseFloat(latitude), lng: parseFloat(longitude) },
                zoom: 15,
            });

            // Add a marker at the specified location
            const marker = new google.maps.marker.Marker({
                position: { lat: parseFloat(latitude), lng: parseFloat(longitude) },
                map: map,
                title: 'Programics'
            });

             // Construct the Google Maps URL
            const mapUrl = `https://www.google.com/maps/api/js?key=${latitude},${longitude}&marker=${latitude},${longitude}`;


            
            // Update the link's href attribute
            const mapLink = document.getElementById('mapLink');
            mapLink.href = mapUrl;
            mapLink.textContent = 'Programics';

     }
    </script>
    <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB6_SDhzbHz_ssSObg7xjD9hdCs7_yhGFg&callback=initMap">
        
    </script>


</body>
</html>
