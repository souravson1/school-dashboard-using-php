<?php
include 'config.php';
@$id=$_GET['id'];
$sql = "SELECT * FROM admission where id= '$id'";
$result = mysqli_query($db,$sql);
$fetch=mysqli_fetch_array($result);

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Regal Admin</title>
  <!-- base:css -->
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="vendors/select2/select2.min.css">
  <link rel="stylesheet" href="vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
  <script>
    
    
    function myFunction() {
      var fn= document.getElementById('first_name').value;
      var ln= document.getElementById("last_name").value;
      var tl=fn+ ' ' +ln;
    alert(tl);
    }
  </script>
</head>

<body>
  <div class="container-scroller">
   <?php include 'header.php'; ?>
    <div class="container-fluid page-body-wrapper">
    <?php include 'sidebar.php'; ?>
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">

            
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Course Form</h4>
                  <form class="form-sample" action='cou_sub.php' method='post' onsubmit="myFunction();">
                    <p class="card-description">
                      Personal info
                    </p>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Course Name</label>
                          <div class="col-sm-9">
                            <input type="text" value="<?php if($id !='') { echo $fetch['course_name']; } ?>" id=course_name class="form-control" name="course_name" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Course Fee</label>
                          <div class="col-sm-9">
                            <input type="text" value="<?php if($id !='') { echo $fetch['course_fee']; } ?>" id=course_fee class="form-control" name="course_fee" />
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    
                      </div>
                    </div>
                    <div class="form-group"> 
                      <div class="aab controls col-md-4 "></div>
                        <div class="controls col-md-8 ">
                          <input type="submit" name="Signup" value="<?php if($id !='') { echo "Update" ;} else { echo "Submit"; } ?>" class="btn btn-primary btn btn-info" id="submit-id-signup" />
                        </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            
            
          </div>
        </div>
        <!-- content-wrapper ends -->
        <?php include 'footer.php'; ?>
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  
  <script src="vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <script src="vendors/typeahead.js/typeahead.bundle.min.js"></script>
  <script src="vendors/select2/select2.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="js/file-upload.js"></script>
  <script src="js/typeahead.js"></script>
  <script src="js/select2.js"></script>
  <!-- End custom js for this page-->
</body>

</html>
