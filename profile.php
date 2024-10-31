<?php include ('header.php');
include('connections.php');
$i=$_GET['id'];
$query="select * from add_user where USER_NAME='$i'";
$res=mysqli_query($con,$query);
$data=mysqli_fetch_assoc($res);
?>

<div class="st-content"> 
    <!-- Start Doctors Profile -->
    <section class="st-shape-wrap section light-background">
      <h1 class="text-center ">Your Profile Details</h1>
        <div class="st-seperator">
          <div class="st-seperator-left" ></div>
          <div class="st-seperator-center"><img src="assets/img/front/icon.png" alt="icon" style="width: 20px; height: 20px;"></div>
          <div class="st-seperator-right"></div>
        </div>
      <div class="container">
        <div class="row">
          <div class="col-xl-4 col-lg-3">
            <div class="st-doctors-info-left">
              <div class="st-member st-style1 st-zoom">
                <div class="st-member-img">
                  <img src="<?php echo $data['USER_PIC'] ?>" alt="" class="st-zoom-in" height=230px; width=200px >
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-8 col-lg-9">
            <div class="st-doctors-info-right">
              <ul class="st-doctors-special st-mp0">
                <li><b>Username :</b><span><?php echo $_SESSION['USER_NAME'] ?><span></li>
              </ul>
            <br>
             <ul class="st-doctors-special st-mp0">
                 <li><b>Password : </b><span><span><?php echo $data['PASSWORD'] ?></span></li>
             </ul>
            <br>
             <ul class="st-doctors-special st-mp0">
                 <li><b>Contact No : </b><span><?php echo $data['PHONE'] ?></span></li>
             </ul>
             <br>
             <ul class="st-doctors-special st-mp0">
                 <li><b>Wanna change Pass ?? </b><a href="profile_pass_change.php?id=<?php echo $data['ID']?>">Change From Here</a></li>
             </ul>
              <!-- .st-tabs -->
            </div>
          </div>
        </div>
      </div>
      <div class="st-height-b100 st-height-lg-b80"></div>
      <div class="st-height-b120 st-height-lg-b80"></div>
    </section>
</div>
<?php include ('footer.php')?>