
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
              <div class="row">
                <div class="col-lg-12 col-md-6">
              
                    <form  action="icon_db.php" method="post" onsubmit="return ValidateForm()">

                        <div class="form-group row">
                          <label for="Google" class="col-lg-1 col-form-label">
                           <i class="fa-brands fa-square-google-plus fa-2xl"></i>
                          </label>
                          <div class="col-lg-11">
                            <input type="text" name="Google" class="form-control" id="google" placeholder="link">
                          </div>
                        </div>

                        <div class="form-group row">
                          <label for="Youtube" class="col-lg-1 col-form-label">
                            <i class="fa-brands fa-youtube fa-2xl"></i>
                          </label>
                          <div class="col-lg-11">
                            <input type="text" name="Youtube" class="form-control" id="youtube" placeholder="link">
                          </div>
                        </div>

                        <div class="form-group row">
                          <label for="Whatsapp" class="col-lg-1 col-form-label">
                           <i class="fa-brands fa-square-whatsapp fa-2xl"></i> 
                          </label>
                          <div class="col-lg-11">
                            <input type="text" name="Whatsapp" class="form-control" id="whatsapp" placeholder="link">
                          </div>
                        </div>
                        
                         <div class="form-group row">
                          <label for="Facebook" class="col-lg-1 col-form-label">
                           <i class="fa-brands fa-square-facebook fa-2xl"></i> 
                          </label>
                          <div class="col-lg-11">
                            <input type="text" name="Facebook" class="form-control" id="facebook" placeholder="link">
                          </div>
                        </div>

                        <div class="form-group row">
                          <label for="Instagram" class="col-lg-1 col-form-label">
                            <i class="fa-brands fa-square-instagram fa-2xl"></i>
                          </label>
                          <div class="col-lg-11">
                            <input type="text" name="Instagram" class="form-control" id="instagram" placeholder="link">
                          </div>
                        </div>

                        <div class="form-group row">
                          <label for="Linkedin" class="col-lg-1 col-form-label">
                           <i class="fa-brands fa-linkedin fa-2xl"></i> 
                          </label>
                          <div class="col-lg-11">
                            <input type="text" name="Linkedin" class="form-control" id="linkedin" placeholder="link">
                          </div>
                        </div>
                       
                        <div class="form-group row">
                          <div class="col-lg-11">
                            <center>
                            <button type="submit" value="Upload" class="btn btn-success">Submit</button>
                            <button type="Reset" value="Reset" class="btn btn-danger">Reset</button>
                            </center>
                          </div>
                        </div>

                    </form>
                </div>
            </div>
          </div>
        </div>

    </div>
  </main>

      

      <?php include'footer.php'?>
   <!--  </div>
  </div> -->

  <script src="js/app.js"></script>


  <!-- button validation -->

  <script type="text/javascript">
    function ValidateForm(){
      var ggl = document.getElementById("google");
      var yt = document.getElementById("youtube");
      var wap = document.getElementById("whatsapp");
      var inst = document.getElementById("instagram");
       var twit = document.getElementById("twitter");
      if (ggl.value === "" && yt.value ==="" && wap.value ==="" && inst.value ==="" && twit.value ==="") {
        alert("Please fill the input field ");
        return false;
      }else{
        return confirm("do you want to submit this form");
      }
    }
    
  </script>


</body>

</html>