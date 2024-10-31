<?php 
include ('header.php');
include('connections.php');

$q1 = "SELECT * FROM add_user WHERE ROLE_ID='2'";
$res1 = mysqli_query($con, $q1);

$q = "SELECT * FROM add_vaccine";
$res = mysqli_query($con, $q);

$q3 = "SELECT * FROM add_hospital";
$res3 = mysqli_query($con, $q3);

if (isset($_SESSION['USER_ID'])) {
    $xy = $_SESSION['USER_ID'];
    $q4 = "SELECT * FROM add_child WHERE PARENT_ID='$xy'";
    $res4 = mysqli_query($con, $q4);
}
?>

<main class="main"> 
  <section id="appointment" class="st-shape-wrap section light-background">
      <div class="container">
          <div class="st-section-heading st-style1">
              <h2 class="st-section-heading-title">Make an appointment</h2>
              <div class="st-seperator">
                  <div class="st-seperator-left"></div>
                  <div class="st-seperator-center"><img src="assets/img/front/icon.png" alt="icon" style="width: 20px; height: 20px;"></div>
                  <div class="st-seperator-right"></div>
              </div>
          </div>
          <div class="st-section-heading-subtitle">
              <?php if (!isset($_SESSION['USER_PIC'])) { ?>
                  <div class="alert alert-warning" role="alert">To book an appointment you need to login first! <button class="btn btn-warning"><a href="login.php">Login</a></button></div>
              <?php } else { ?>
          </div>
      </div>
      <div class="container">
          <div class="col-lg-10 offset-lg-1">
              <form method="POST" action="appointment_insert.php" class="st-appointment-form" onsubmit="return validateAppointmentForm()">
                  <div id="st-alert1"></div>
                  <div class="row">
                      <div class="col-lg-6">
                          <div class="st-form-field st-style1">
                              <label>PARENT NAME</label>
                              <input type="hidden" name="p_id" value="<?php echo $_SESSION['USER_ID']; ?>">
                              <input value="<?php echo $_SESSION['USER_NAME']; ?>" readonly>
                          </div>
                      </div>
                      <div class="col-lg-6">
                          <div class="st-form-field st-style1">
                              <label>CHILD NAME</label>
                              <select name="cname" data-placeholder="Select Child">
                                  <?php while ($data4 = mysqli_fetch_assoc($res4)) { ?>                     
                                      <option value="<?php echo $data4['ID']; ?>"><?php echo $data4['CHILD_NAME']; ?></option> 
                                  <?php } ?>                         
                              </select>
                          </div>
                      </div>
                      <div class="col-lg-6">
                          <div class="st-form-field st-style1">
                              <label>Hospital</label>
                              <div class="st-custom-select-wrap">
                                  <select name="h_id" class="st_select1" data-placeholder="Select Hospital">
                                      <option></option>
                                      <?php while ($data3 = mysqli_fetch_assoc($res3)) { ?>
                                          <option value="<?php echo $data3['ID']; ?>"><?php echo $data3['HOSPITALS_NAME']; ?></option>    
                                      <?php } ?>                       
                                  </select>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-6">
                          <div class="st-form-field st-style1">
                              <label>Vaccine</label>
                              <div class="st-custom-select-wrap">
                                  <select name="vacc_id" class="st_select1" data-placeholder="Select Vaccine">
                                      <option></option>
                                      <?php while ($data = mysqli_fetch_assoc($res)) { ?>
                                          <option value="<?php echo $data['ID']; ?>"><?php echo $data['VAC_NAME']; ?></option>
                                      <?php } ?>
                                  </select>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-6"> 
                          <div class="st-form-field st-style1">
                              <label>DATE</label>
                              <input type="date" name="date" required id="appointment-date">
                              <span id="dateError" style="color: red;"></span>
                          </div>
                      </div>
                      <div class="col-lg-6">
                          <div class="st-form-field st-style1">
                              <label>TIME</label>
                              <input type="time" name="time" required>
                          </div>
                      </div>
                      <div class="col-lg-12">
                          <button class="st-btn st-style1 st-color1 st-size-medium" type="submit" id="appointment-submit" name="btn">Appointment</button>
                      </div>
                  </div>
              </form>
          </div>
      </div>
      <div class="st-height-b120 st-height-lg-b80"></div>
      <?php } ?>
  </section>
</main> 

<script>
// Set maximum date to one month from today
const today = new Date();
const nextMonth = new Date();
nextMonth.setMonth(today.getMonth() + 1);
const maxDate = nextMonth.toISOString().split("T")[0];

// Set the max attribute of the date input
document.getElementById('appointment-date').setAttribute('max', maxDate);

function validateAppointmentForm() {
    const appointmentDateInput = document.querySelector('input[name="date"]');
    const appointmentDate = new Date(appointmentDateInput.value);
    const today = new Date();
    today.setHours(0, 0, 0, 0); // Set to the start of the day

    // Reset error message
    const dateError = document.getElementById('dateError');
    dateError.innerHTML = ""; 

    // Check if the date is in the past
    if (appointmentDate < today) {
        dateError.innerHTML = "Appointment date cannot be in the past.";
        return false; // Prevent form submission
    }

    // Check if the date exceeds one month in the future
    if (appointmentDate > nextMonth) {
        dateError.innerHTML = "Appointment date cannot be more than one month in the future.";
        return false; // Prevent form submission
    }

    return true; // Allow form submission
}
</script>

<?php include ('footer.php'); ?>
