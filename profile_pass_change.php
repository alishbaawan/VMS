<?php include ('header.php') ;
include('connections.php');
$i=$_GET['id'];
$q="select * from add_user where ID='$i'";
$res=mysqli_query($con,$q);
$data=mysqli_fetch_assoc($res)
?>

<section class="st-shape-wrap" id="contact">
      <div class="container">
        <div class="st-section-heading st-style1">
          <h2 class="st-section-heading-title">Change Password</h2>
          <div class="st-seperator">
            <div class="st-seperator-left" ></div>
            <div class="st-seperator-center"><img src="assets/img/front/icon.png" alt="icon" style="width: 20px; height: 20px;"></div>
            <div class="st-seperator-right"></div>
          </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-10 offset-lg-1">
            <div id="st-alert"></div>
            <form action="profile_pass_insert.php" class="row st-contact-form st-type1" method="post">
            
                <div class="st-form-field st-style1">
                  <input type="hidden"  name="hidden_id" placeholder="Id" required value="<?php echo $data['ID']?>">
                </div>
              
              <div class="col-lg-6">
                <div class="st-form-field st-style1">
                  <label>Change Password </label>
                  <input type="text" name="pass" required placeholder="Make Sure It's Strong One" value="<?php echo $data['PASSWORD']?>">
                </div>
              </div><!-- .col --> 
                </div>
              </div><!-- .col -->
              <button type="submit" style="margin-left: 50%;" class="st-btn st-style1 st-color1 st-size-medium" name="sub">Update</button>
            </form>

          </div><!-- .col -->
        </div>
      </div>
      <div class="st-height-b120 st-height-lg-b80"></div>
    </section>

<?php include ('footer.php') ?>