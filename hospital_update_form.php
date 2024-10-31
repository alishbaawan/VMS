<?php 
include('header.php');
include('connection.php');
$x = $_GET['id'];
$q = "SELECT * FROM add_hospital WHERE ID='$x'";
$res = mysqli_query($con, $q);
$data = mysqli_fetch_assoc($res);
?>
<div class="container-fluid p-0">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="white_box mb_30">
                <div class="box_header ">
                    <div class="main-title"> 
                        <h3 class="mb-0">Update Hospitals</h3>
                    </div> 
                </div>
                <form method="POST" action="hospital_update.php" enctype="multipart/form-data">
                    <input type="hidden" class="form-control" name="HOSPITAL_ID" value="<?php echo $data['ID']; ?>">
                    <div class="mb-3">
                        <label class="form-label">Hospital Name</label>
                        <input type="text" class="form-control" name="HOSPITAL_NAME" value="<?php echo $data['HOSPITALS_NAME']; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Location</label>
                        <input type="text" class="form-control" name="LOCATION" value="<?php echo $data['LOCATION']; ?>">
                    </div>
                    <div class="mb-3"> 
                        <label class="form-label">Contact</label>
                        <input type="text" class="form-control" name="CONTACT" value="<?php echo $data['CONTACT']; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Details</label>
                        <input type="text" class="form-control" name="DETAILS" value="<?php echo $data['DETAILS']; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Hospital Image</label>
                        <input type="file" class="form-control" onChange="readURL(this)" name="IMAGE">
                        <img id="proimg" src="<?php echo $data['HOSPITALS_PIC']; ?>" height="70"/>
                    </div>
                    <button type="submit" class="btn btn-danger form-control" name="btn">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>
