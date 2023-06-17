<?php

include 'session.php';
$std_name='';
if(isset($_SESSION['reg_no'])){
$login_session= $_SESSION['reg_no'];
$get_sql="select * from admission where reg_no ='$login_session'";
$ex_sql= mysqli_query($db,$get_sql);
$get_result= mysqli_fetch_array($ex_sql);
$std_name= $get_result['first_name'].' '.$get_result['last_name'];
$get_data="SELECT * from images where reg_no = '$login_session'";
$ex_img= mysqli_query($db,$get_data);
$get_img=mysqli_fetch_array($ex_img);
//print_r($get_img);
}


 if(isset($get_img['img']) !='')
              {
                $img=$get_img['img'];
              }
              else
              {
                $img="face7.png";
              }

              ?>
<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="user-profile">
          <div class="user-image">
            <img src="images/uploads/<?php echo $img;  ?>" />
          </div>
          <div class="user-name">
              <?php 
              if($std_name !='')
              {
                echo $std_name;
              }
              else
              {
                echo "Admin";
              }
              
              ?>
          </div>
          <div class="user-designation">
              Developer
          </div>
        </div>
        <ul class="nav">
          
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <i class="icon-box menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
            <?php
            if($_SESSION['user_role']=='admin')
            
            {



            ?>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class=""></i>
              <span class="menu-title">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Enquiry</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="enquiry_form.php">Enquiry Form</a></li>
                <li class="nav-item"> <a class="nav-link" href="basic_table.php">Enquiry Table</a></li>
              </ul>
            </div>
</li>
            <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic1" aria-expanded="" aria-controls="ui-basic">
              <i class=""></i>
              <span class="menu-title">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Admission</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic1">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="admission_form.php">Admission Form</a></li>
                <li class="nav-item"> <a class="nav-link" href="admission_table.php">Admission Table</a></li>
              </ul>
            </div>
</li>
            <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic2" aria-expanded="false" aria-controls="ui-basic">
              <i class="fas fa-money-check"></i>
              <span class="menu-title">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fee</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic2">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="fee_form.php">Fee Form</a></li>
                <li class="nav-item"> <a class="nav-link" href="fee_table.php">Fee Table</a></li>
              </ul>
            </div>
</li>
            <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic3" aria-expanded="false" aria-controls="ui-basic">
              <i class="fas fa-award"></i>
              <span class="menu-title">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Result</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic3">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="result_form.php">Result Form</a></li>
                <li class="nav-item"> <a class="nav-link" href="result_table.php">Result Table</a></li>
              </ul>
            </div>
</li>
            <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic4" aria-expanded="false" aria-controls="ui-basic">
              <i class="fas fa-graduation-cap"></i>
              <span class="menu-title">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Certificate</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic4">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="certificate_table.php">Certificate Table</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic5" aria-expanded="false" aria-controls="ui-basic">
              <i class="fas fa-graduation-cap"></i>
              <span class="menu-title">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Course</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic5">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="course_form.php">Course Form</a></li>
                <li class="nav-item"> <a class="nav-link" href="course_table.php">Course Table</a></li>
              </ul>
            </div>
          </li>
          <?php
            }
          elseif($_SESSION['user_role']=='student')
          {


          ?>
          <!-- student sidebAR -->

          <li class="nav-item">
            <a class="nav-link" href="student.php">
              <i class="icon-box menu-icon"></i>
              <span class="menu-title">My Profile</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="fee2.php">
              <i class="icon-box menu-icon"></i>
              <span class="menu-title">Fee Details</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="result.php">
              <i class="icon-box menu-icon"></i>
              <span class="menu-title">Result</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="certificate2.php">
              <i class="icon-box menu-icon"></i>
              <span class="menu-title">Certificate</span>
            </a>
          </li>
          <?php
          }
          ?>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">
              <i class="icon-box menu-icon"></i>
              <span class="menu-title">logout</span>
            </a>
          </li>
</ul>
            
          
          
      </nav>
      <!-- partial -->