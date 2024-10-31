<?php include ('header.php') ?>


<div class="container-fluid p-0">
<div class="row justify-content-center">
<div class="col-lg-12"> 
<div class="white_box mb_30">
<div class="box_header ">
<div class="main-title">
<h3 class="mb-0">Add Your Roles From Here : </h3>
</div>
</div>
<form method="POST" action="role_insert.php">
<div class="mb-3">
<label class="form-label" for="exampleFormControlInput1" >Role Name</label>
<input type="text" class="form-control" name="role_name" id="exampleFormControlInput1">

</div>
<button type="submit" class="btn btn-danger form-control" name="sub" >Add</button>
</form>
<?php include('footer.php') ?>