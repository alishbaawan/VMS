<?php include ('header.php');
include('connections.php');
if(isset($_GET['id'])){
  $x=$_GET['id'];
    $q="select * from add_hospital where ID='$x'";
}
else{
    $q="select * from add_hospital";
  } 
$res=mysqli_query($con,$q);
$data=mysqli_fetch_assoc($res);

?>
<!-- Start Hospital Single Seciton -->
<main class="main ">
<section class="st-content section light-background">
  <h1 class="text-center ">Hospitals</h1>
  <div class="st-seperator">
            <div class="st-seperator-left" ></div>
            <div class="st-seperator-center"><img src="assets/img/front/icon.png" alt="icon" style="width: 20px; height: 20px;"></div>
            <div class="st-seperator-right"></div>
          </div>
<div class="st-page-heading st-dynamic-bg" style="background-image: url('<?php echo $data['HOSPITALS_PIC']?>')">
      <div class="container">
        <div class="st-page-heading-in text-center">
          <h1 class="st-page-heading-title"><?php echo $data['HOSPITALS_NAME'] ?></h1>
          <div class="st-post-label">
            <span><?php echo $data['LOCATION'] ?></span>
            <span><?php echo $data['CONTACT'] ?></span>
          </div>
        </div>
      </div>
    </div><!-- .st-page-heading --> 
    <div class="st-height-b100 st-height-lg-b80"></div>
  <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="st-post-details st-style1">
          <h1 style="font-family: Arial, Helvetica, sans-serif;"><b><?php echo $data['HOSPITALS_NAME'] ?></b></h1><br>
            <p style="font-weight: bold; font-family: Arial, Helvetica, sans-serif;" ><?php echo $data['DETAILS'] ?></p>
        </div>
      </div>
    </div>
    
    <p class="mb-4"><a href="Appointment.php" class="btn btn-danger">Book Your Appointment</a></p>
            </div>
            <div class="st-height-b100 st-height-lg-b80"></div>
    </section>

    </main>
    <!-- End Hospital Single Seciton -->
    <?php include ('footer.php') ?>