<?php

include 'config.php';
$std_reg=$_SESSION['reg_no'];
$sql = "SELECT * FROM admission where admission.reg_no='$std_reg'";
$result = mysqli_query($db,$sql);
if(mysqli_num_rows($result)){

// $rows1 = mysqli_fetch_array($result);

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
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
  <style>
            table {
                margin: 0 auto;
                font-size: large;
                border: 1px solid black;
            }
      
            h1 {
                text-align: center;
                color: #006600;
                font-size: xx-large;
                font-family: 'Gill Sans', 'Gill Sans MT', 
                ' Calibri', 'Trebuchet MS', 'sans-serif';
            }
      
            td {
                background-color: #E4F5D4;
                border: 1px solid black;
            }
      
            th,
            td {
                font-weight: bold;
                border: 1px solid black;
                padding: 10px;
                text-align: center;
            }
      
            td {
                font-weight: lighter;
            }
        </style>
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <?php include 'header.php'; ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      
      <!-- partial:../../partials/_sidebar.html -->
      <?php include 'sidebar.php'; ?>
      <!-- partial -->
      <div class="main-panel">
      
      <h1>MY PROFILE</h1>
            <table>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Gender</th>
                    <th>Date of Birth</th>
                    <th>Email</th>
                    <th>Course</th>
                    <th>Date Of Adm.</th>
                    <th>Password</th>
                    <th>Address 2</th>
                    <th>Postcode</th>
                    <th>City</th>
                    <th>State</th>

                </tr>
                <?php
                
                while($rows = mysqli_fetch_array($result))
                {

                ?>
                <tr>
                  <td><?php echo $rows['first_name'];?></td>
                  <td><?php echo $rows['last_name'];?></td>
                  <td><?php echo $rows['gender'];?></td>
                  <td><?php echo $rows['dob'];?></td>
                  <td><?php echo $rows['email'];?></td>
                  <td><?php echo $rows['course'];?></td>
                  <td><?php echo $rows['doa'];?></td>
                  <td><?php echo $rows['password'];?></td>
                  <td><?php echo $rows['address2'];?></td>
                  <td><?php echo $rows['postcode'];?></td>
                  <td><?php echo $rows['city'];?></td>
                  <td><?php echo $rows['state'];?></td>
                </tr>
              <?php
             
            }
        }
              ?>
            </table>


        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="vendors/base/vendor.bundle.base.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>

</html>
