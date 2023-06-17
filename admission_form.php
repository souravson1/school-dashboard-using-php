<?php
include 'config.php';
@$reg_no=$_GET['id'];
$sql = "SELECT * FROM admission where reg_no= '$reg_no'";
$result = mysqli_query($db,$sql);
$fetch=mysqli_fetch_array($result);

$var= "SELECT * FROM course";
$res = mysqli_query($db,$var);

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
    function functionForm(){
      var name = document.forms["AdmForm"]["first_name"];
      var lastname = document.forms["AdmForm"]["last_name"];
      var gender = document.forms["AdmForm"]["gender"];
      var dob = document.forms["AdmForm"]["dob"];
      var course = document.forms["AdmForm"]["course"];
      var doa = document.forms["AdmForm"]["doa"];
      var email = document.forms["AdmForm"]["email"];
      var address = document.forms["AdmForm"]["address2"];
      var postcode = document.forms["AdmForm"]["postcode"];
      var city = document.forms["AdmForm"]["city"];
      var state = document.forms["AdmForm"]["state"];
      var img = document.forms["AdmForm"]["img"];
      var p = document.getElementById('password').value, errors = [ ];
      
      if (name.value == "") {
            window.alert("Please enter your first name.");
            name.focus();
            return false;
      }
      if (lastname.value == "") {
            window.alert("Please enter your last name.");
            lastname.focus();
            return false;
      }
      if (gender.value == "") {
            window.alert("Please enter your gender.");
            gender.focus();
            return false;
      
      }
      if (dob.value == "") {
            window.alert("Please enter your date of birth.");
            doa.focus();
            return false;
      }
      if (course.value == "") {
            window.alert("Please enter your course name.");
            course.focus();
            return false;
      }
      if (doa.value == "") {
            window.alert("Please enter your date of admission.");
            doa.focus();
            return false;
      }
      if (email.value == "") {
            window.alert("Please enter your email.");
            email.focus();
            return false;
      }
      if (p.length < 8) {
            errors.push("Your password must be at least 8 characters"); 
      }
      if (p.search(/[a-z]/i) < 0) {
            errors.push("Your password must contain at least one letter.");
      }
      if (p.search(/[0-9]/) < 0) {
            errors.push("Your password must contain at least one digit."); 
      }
      if (p.search(/[!@#$%^&*]/) < 0) {
            errors.push("Your password must contain at least one symbol."); 
      }
      if (errors.length > 0) {
            alert(errors.join("\n"));
            return false;
    }
      if (address.value == "") {
            window.alert("Please enter your address.");
            address.focus();
            return false;
      }
      if (postcode.value == "") {
            window.alert("Please enter your postcode.");
            postcode.focus();
            return false;
      }
     
      if (postcode.length > 6) {
            window.alert("Postcode must be 6 digits.");
            postcode.focus();
            return false;
      }
      if (postcode.length < 6) {
            window.alert("Postcode must be 6 digits.");
            postcode.focus();
            return false;
      }
      if (city.value == "") {
            window.alert("Please enter your city.");
            city.focus();
            return false;
      }
      if (state.value == "") {
            window.alert("Please enter your state.");
            state.focus();
            return false;
      }
      if (img.value == "") {
            window.alert("Please enter your photo.");
            img.focus();
            return false;
      }
      return true;
      
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
                  <h4 class="card-title">Admission Form</h4>
                  <form class="form-sample" name="AdmForm" action='adm_sub.php' method='post' enctype='multipart/form-data' onsubmit="return functionForm()">
                    <p class="card-description">
                      Personal info
                    </p>
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
                          <label class="col-sm-3 col-form-label" >Gender</label>
                          <div class="col-sm-9">
                            <select class="form-control" name="gender">
                              
                              <option <?php if($reg_no !='') { if($fetch['gender']=='Male') {echo "selected";} } ?>>Male</option>
                              <option <?php if($reg_no !='') { if($fetch['gender']=='Female') {echo "selected";} } ?>>Female</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Date of Birth</label>
                          <div class="col-sm-9">
                            <input type="date" value="<?php if($reg_no !='') { echo $fetch['dob']; } ?>" class="form-control" name="dob" placeholder="dd/mm/yyyy"/>
                            
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Course</label>
                          <div class="col-sm-9">
                            <select class="form-control" name="course">
                              <?php
                            while($res2= mysqli_fetch_array($res))
                            {
                            ?>
                              <option value="<?php echo $res2['cid'] ?>"<?php if($reg_no !='') if($fetch['course']==$res2['cid']) {echo"selected";} ?>><?php echo $res2['course_name'];  ?></option>
                             <?php
                             }
                             ?>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Date of Adm.</label>
                          <div class="col-sm-9">
                            <input type="date" value="<?php if($reg_no !='') { echo $fetch['doa']; } ?>" class="form-control" name="doa" placeholder="dd/mm/yyyy"/>
                          </div>
                        </div>
                      </div>
                    </div>
                    <p class="card-description">
                      Address
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Email</label>
                          <div class="col-sm-9">
                            <input type="text" value="<?php if($reg_no !='') { echo $fetch['email']; } ?>" class="form-control" name="email"/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label for="psw" class="col-sm-3 col-form-label">Password</label>
                          <div class="col-sm-9">
                            <input type="password" id="password" value="<?php if($reg_no !='') { echo $fetch['password']; } ?>" class="form-control" name="password" />
                            <span id = "message" style="color:orange"> </span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Address</label>
                          <div class="col-sm-9">
                            <input type="text" value="<?php if($reg_no !='') { echo $fetch['address2']; } ?>" class="form-control" name="address2"/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Postcode</label>
                          <div class="col-sm-9">
                            <input type="text" value="<?php if($reg_no !='') { echo $fetch['postcode']; } ?>" class="form-control" name="postcode" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">City</label>
                          <div class="col-sm-9">
                            <input type="text" value="<?php if($reg_no !='') { echo $fetch['city']; } ?>" class="form-control" name="city"/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">State</label>
                          <div class="col-sm-9">
                            <input type="text" value="<?php if($reg_no !='') { echo $fetch['state']; } ?>" class="form-control" name="state"/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Photo</label>
                          <div class="col-sm-9">
                          <input type="file" id="myFile" value="<?php if($reg_no['reg_no'] !='') { echo $fetch['img']; } ?>" name="img">
                          </div>
                        </div>
                      </div>
                      </div>
                    </div>
                    <div class="form-group"> 
                      <div class="aab controls col-md-4 "></div>
                        <div class="controls col-md-8 ">
                          <input type="submit" name="Signup" value="<?php if($reg_no !='') { echo "Update" ;} else { echo "Submit"; } ?>" class="btn btn-primary btn btn-info" id="submit-id-signup" />
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
