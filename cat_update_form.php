<?php include ('header.php');
include('connection.php');
$id=$_GET['id'];
$query="select * from add_category where ID = '$id'";
$res=mysqli_query($con,$query); 
$data=mysqli_fetch_assoc($res);
?>


<div class="container-fluid p-0">
<div class="row justify-content-center">
<div class="col-lg-12">
<div class="white_box mb_30">
<div class="box_header ">
<div class="main-title">
<h3 class="mb-0">Update Your Categories From Here</h3>
</div>  
</div>
<form method="POST" action="cat_update.php">
<div class="mb-3">
<label class="form-label" for="exampleFormControlInput1" >Category Name</label>
<input type="hidden" class="form-control" name="cat_id" id="exampleFormControlInput1" value="<?php echo $data['ID']?>">
<input type="text" class="form-control" name="cat_name" id="exampleFormControlInput1" value="<?php echo $data['VAC_NAME']?>">

</div>
<div class="mb-3">
<label class="form-label" for="exampleFormControlInput1" >Details</label>
<input type="text" class="form-control" name="dtls" id="exampleFormControlInput1" value="<?php echo $data['DETAILS']?>">

</div>
<button type="submit" class="btn btn-danger form-control" name="sub">Update</button>
</form>
<?php include('footer.php') ?>