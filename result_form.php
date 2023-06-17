<?php
include 'config.php';
@$reg_no=$_GET['id'];
$sql = "SELECT * FROM admission where reg_no= '$reg_no'";
$result = mysqli_query($db,$sql);
$fetch=mysqli_fetch_array($result);

$course_name=$fetch['course'];
$var= "SELECT * FROM course where cid='$course_name'";
$res = mysqli_query($db,$var);
$res2= mysqli_fetch_array($res);

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
                  <h4 class="card-title">STUDENT'S RESULT</h4>
                  <form class="form-sample" action="res_sub.php" method="post" onsubmit="myFunction();">
                    <p class="card-description">
                      Personal info
                    </p>
                    <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Registration No.</label>
                          <div class="col-sm-9">
                            <input type="text" value="<?php if($reg_no !='') { echo $fetch['reg_no']; } ?>" id="reg_no" class="form-control" name="reg_no" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">First Name</label>
                          <div class="col-sm-9">
                            <input type="text" value="<?php if($reg_no !='') { echo $fetch['first_name']; } ?>" id=first_name class="form-control" name="first_name" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Last Name</label>
                          <div class="col-sm-9">
                            <input type="text" value="<?php if($reg_no !='') { echo $fetch['last_name']; } ?>" id=last_name class="form-control" name="last_name" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Email</label>
                          <div class="col-sm-9">
                            <input type="text" value="<?php if($reg_no !='') { echo $fetch['email']; } ?>" id=email class="form-control" name="email" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Percentage</label>
                          <div class="col-sm-9">
                            <input type="text" value="" id=percentage class="form-control" name="percentage" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Course</label>
                          <div class="col-sm-9">
                          
                          <input type="text" value="<?php if($reg_no !='')  {echo $res2['course_name'];}  ?>" id=last_name class="form-control" name="course" />
                            
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Pass/Fail</label>
                          <div class="col-sm-4">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="passorfail" id="membershipRadios1" value="Free">
                                Pass
                              </label>
                            </div>
                          </div>
                          <div class="col-sm-5">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="passorfail" id="membershipRadios2" value="Professional">
                                Fail
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <p class="card-description">
                      Marks
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Subject 1</label>
                          <div class="col-sm-9">
                            <input type="text" value="" class="form-control" name="subject1"/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Subject 2</label>
                          <div class="col-sm-9">
                            <input type="text" value="" class="form-control" name="subject2"/>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Subject 3</label>
                          <div class="col-sm-9">
                            <input type="text" value="" class="form-control" name="subject3"/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Subject 4</label>
                          <div class="col-sm-9">
                            <input type="text" value="" class="form-control" name="subject4" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Practical</label>
                          <div class="col-sm-9">
                            <input type="text" value="" class="form-control" name="practical"/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Grade</label>
                          <div class="col-sm-9">
                            <select class="form-control" name="grade">
                              <option >A+</option>
                              <option >A</option>
                              <option >B+</option>
                              <option >B</option>
                              <option >C+</option>
                              <option >C</option>
                              <option >D</option>
                              <option >E</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group"> 
                      <div class="aab controls col-md-4 "></div>
                        <div class="controls col-md-8 ">
                          <input type="submit" name="submit" value="<?php if($reg_no !='') { echo "Update" ;} else { echo "Submit"; } ?>" class="btn btn-primary btn btn-info" id="submit-id-signup" />
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
