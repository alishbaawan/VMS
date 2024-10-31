<?php session_start(); 
include('connections.php');
$q="select * from add_hospital";
$res=mysqli_query($con,$q); 

$q1="select * from add_category"; 
$res1=mysqli_query($con,$q1);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VMS. &mdash; VACCINATION MANAGEMENT SYSTEM</title>

  <link rel="icon" href="assets/img/front/footericon.png" />

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">  
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">

  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">  

  <!-- Main CSS File --> 
  <link href="assets/css/main.css" rel="stylesheet">
  
</head>


<body>

  <!-- header start  -->
  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container position-relative d-flex align-items-center justify-content-between">

      <a href="home.php" class="logo d-flex align-items-center me-auto me-xl-0">
        <img src="assets/img/front/icon.png" alt="">
        <h1 class="sitename">VMS</h1>
        <span>.</span>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="home.php" >Home<br></a></li>
          <li><a href="about.php">About</a></li>
          <li class="dropdown">
            <a href="#"><span>Hospitals</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul class="dropdown">
                <?php while($data=mysqli_fetch_assoc($res)) {?>
                    <li><a href="hospitals.php?id=<?php echo $data['ID']?>"><?php echo $data['HOSPITALS_NAME']?></a></li>
                    <?php }?>
                </ul>
          </li>
          <li class="dropdown">
            <a href="#"><span>Vaccine</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul class="dropdown">
                <?php while($data1=mysqli_fetch_assoc($res1)) {?>
                    <li><a href="vaccine.php?id=<?php echo $data1['ID']?>"><?php echo $data1['VAC_NAME']?></a></li>
                    <?php }?>  
                </ul>
          </li>
          <li><a href="contact.php">Contact Us</a></li>
          <li><a href="appointment.php">Appointment</a></li>

          <?php  if(!isset($_SESSION['USER_PIC'])) { ?>
          <li><a href="signup.php" >Sign up</a></li>
          <li><a href="login.php" >Login</a></li>
          <?php  } else { ?>
          <li class="dropdown">
          <a href="#"><img src="<?php echo  $_SESSION['USER_PIC'] ?>" height=30px; width=30px><i class="bi bi-chevron-down toggle-dropdown"></i></a>
          <ul class="dropdown">
          <li><a href="profile.php?id=<?php echo$_SESSION['USER_NAME'] ?>"><?php echo  $_SESSION['USER_NAME'] ?></a></li>
          <li><a href="add_child_details.php" >Add Child Details</a></li>
          <li><a href="child_details.php?id=<?php echo$_SESSION['USER_ID'] ?>" >Show Child Details</a></li>
          <li><a href="appointment_details.php?id=<?php echo$_SESSION['USER_NAME'] ?>" >Your Appointments</a></li>
          <li><a href="logout.php" >LOG OUT</a></li>
          </ul>
          </li>
                  
          <?php } ?>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

</body>
</html>