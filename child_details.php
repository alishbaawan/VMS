<?php
include ('header.php'); 
include('connections.php');
$i=$_GET['id'];
$query="select * from add_child where PARENT_ID='$i'";
$res=mysqli_query($con,$query);

?>

<div class="st-content">
    <!-- Start Doctors Profile -->
    <section class="st-shape-wrap section light-background">
        <h1 class="text-center ">Your Childs Details</h1>
        <div class="st-seperator">
          <div class="st-seperator-left" ></div>
          <div class="st-seperator-center"><img src="assets/img/front/icon.png" alt="icon" style="width: 20px; height: 20px;"></div>
          <div class="st-seperator-right"></div>
        </div>
        <?php
         while($data = mysqli_fetch_assoc($res)) { 
          ?>
      <div class="container">
        <div class="row">
          <div class="col-xl-4 col-lg-3">
            <div class="st-doctors-info-left">
              <div class="st-member st-style1 st-zoom">
                <div class="st-member-img">
                  <img src="<?php echo $data['CHILD_PIC']; ?>" alt="" class="st-zoom-in">
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-8 col-lg-9">
            <div class="st-doctors-info-right">
              <ul class="st-doctors-special st-mp0">
                <li><b>Child Name : </b><span> <?php echo $data['CHILD_NAME']; ?> </span></li>
              </ul><br>
              <ul class="st-doctors-special st-mp0">
              <li><b>Date of Birth :</b><span> <?php echo $data['D_O_B']; ?></span></li>
             </ul><br>
             <ul class="st-doctors-special st-mp0">
             <li><b>Gender :</b><span> <?php echo $data['GENDER']; ?></span></li>
            </ul><br>
             <ul class="st-doctors-special st-mp0">
              <li><b>Blood Group :</b><span> <?php echo $data['BLOOD_GROUP']; ?></span></li>
            </ul><br>
             <ul class="st-doctors-special st-mp0">
              <li><b>B-Form No :</b><span> <?php echo $data['B_FORM']; ?></span></span></li>
            </ul><br>
             <ul class="st-doctors-special st-mp0">
              <li><b>Parent Nic :</b><span> <?php echo $data['PARENT_CNIC']; ?></span></li>
            </ul><br>
            <a href='child_details_delete.php?Id=<?php echo $data['ID']; ?>' class="btn btn-danger">Delete</a>
              <!-- .st-tabs -->
            </div>
          </div>
        </div>
      </div>
      <div class="st-height-b120 st-height-lg-b80"></div>

      <?php
     } 
     ?>
    </section>
</div>
<?php 
include ('footer.php')
?>

                
                
                
                