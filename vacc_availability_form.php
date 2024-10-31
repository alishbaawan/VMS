<?php include ('header.php');
include ('connection.php');
$q="select * from add_user where ROLE_ID=3";
$res=mysqli_query($con,$q);
$data=mysqli_fetch_assoc($res);
$q1="select * from add_vaccine ";
$res1=mysqli_query($con,$q1);
$x=$_SESSION['HOSP_NAME'];
$q2="select HOSPITALS_NAME from add_hospital join add_user on add_user.ID=add_hospital.USER_ID where add_user.USER_NAME='$x'";
$res2=mysqli_query($con,$q2);
$data2=mysqli_fetch_assoc($res2);
?>

 

<div class="container-fluid p-0">
<div class="row justify-content-center">
<div class="col-lg-12">
<div class="white_box mb_30">
<div class="box_header ">
<div class="main-title">
<h3 class="mb-0">Add Vaccine</h3>
</div>
</div>
<form method="POST" action="vacc_availability_insert.php">
<div class="mb-3">
<label class="form-label" for="exampleFormControlInput1" >User</label>
<input type="text" class="form-control" id="exampleFormControlInput1" disabled value="<?php echo $_SESSION['HOSP_NAME']?>" > 
<input type="hidden" class="form-control" name="user_id_fk" id="exampleFormControlInput1"  value="<?php echo $_SESSION['HOSP_ID']?>" > 

</div>
<div class="mb-3">
<label class="form-label" for="exampleFormControlInput1" >Vaccine</label>
<select  class="form-control" name="vaccine_id_fk">
<?php while($data1=mysqli_fetch_assoc($res1) ) { ?>
                       <option value="<?php echo $data1['ID'] ?>"> <?php echo $data1['VAC_NAME']?> </option>
                       <?php } ?>
</select>
</div>
<div class="mb-3">
<label class="form-label" for="exampleFormControlInput1" >Status</label>
<select  class="form-control" name="status">
    <option value=""></option>
    <option value="Available">Available</option>
    <option value="Not Available">Not Available</option>
</select>
</div>
<div class="mb-3">
<label class="form-label" for="exampleFormControlInput1" >Hospital</label>
<input type="text" class="form-control" id="exampleFormControlInput1" disabled value="<?php echo $data2['HOSPITALS_NAME']?>">
<input type="hidden" class="form-control" name="hospital" id="exampleFormControlInput1"  value="<?php echo $data2['HOSPITALS_NAME']?>">
</div>
<button type="submit" class="btn btn-danger form-control" name="sub">Add</button>
</form>



<?php include ('footer.php') ?>