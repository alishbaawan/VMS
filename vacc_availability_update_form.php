<?php 
include ('header.php');
include ('connection.php');

$x = $_GET['id']; // Get the ID from the URL
$q = "SELECT * FROM available_vaccine WHERE ID = '$x'";
$res = mysqli_query($con, $q);
$data = mysqli_fetch_assoc($res); // Fetch the record for this ID

$q1 = "SELECT * FROM add_vaccine"; // Fetch all vaccines for the dropdown
$res1 = mysqli_query($con, $q1);
?>

<div class="container-fluid p-0">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="white_box mb_30">
                <div class="box_header ">
                    <div class="main-title">
                        <h3 class="mb-0">Update Vaccine Status</h3>
                    </div>
                </div>
                <form method="POST" action="vacc_availability_update.php">
                    <input type="hidden" class="form-control" name="app_id" value="<?php echo $data['ID']; ?>">


                    <div class="mb-3">
                        <label class="form-label" for="exampleFormControlInput1">Status</label>
                        <select class="form-control" name="status">
                            <option value="Available" <?php if($data['STATUS'] == 'Available') echo 'selected'; ?>>Available</option>
                            <option value="Not Available" <?php if($data['STATUS'] == 'Not Available') echo 'selected'; ?>>Not Available</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-danger form-control" name="sub">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include ('footer.php'); ?>
