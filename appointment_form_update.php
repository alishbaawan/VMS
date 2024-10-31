<?php include('header.php');
include('connection.php');
$x=$_GET['id'];
$q="select * from add_appointment where ID='$x'";
$res=mysqli_query($con,$q);
$data=mysqli_fetch_assoc($res);
?>   
<div class="container-fluid p-0"> 
<div class="row justify-content-center"> 
<div class="col-lg-12">
<div class="white_box mb_30">
<div class="box_header ">
<div class="main-title">
<h3 class="mb-0">Update Appointment</h3>
</div>
</div>
<form method="POST" action="appointment_update.php">
<div class="mb-3">
<input type="hidden" class="form-control" name="app_id" id="exampleFormControlInput1" value="<?php echo $data['ID']?>">
<div class="mb-3">
<label class="form-label" for="exampleFormControlInput1" >STATUS</label>
<select  class="form-control" name="status">
    <option value="Pending">Pending</option>
    <option value="Declined">Declined</option>
    <option value="Vaccinated">Vaccinated</option>
</select>
</div>
<div class="mb-3">
<label class="form-label" for="exampleFormControlInput1">REMARKS</label>
<input type="text" class="form-control" id="exampleFormControlInput1" name="remarks" value="<?php echo $data['REMARK'] ?>">
</div>

<button type="submit" class="btn btn-danger form-control" name="btn">UPDATE</button>
</form>
<?php include('footer.php') ?>