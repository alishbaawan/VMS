<?php include('header.php'); 
include('connection.php');
$q="select * from add_user where ROLE_ID='3'";
$res=mysqli_query($con,$q);
?>
<div class="container-fluid p-0">
<div class="row justify-content-center">
<div class="col-lg-12">
<div class="white_box mb_30"> 
<div class="box_header ">
<div class="main-title">
<h3 class="mb-0">Add Hospitals</h3>
</div> 
</div>
<form method="POST" action="hospital_insert.php" enctype="multipart/form-data">
<div class="mb-3">
<label class="form-label" for="exampleFormControlInput1">User Name</label>
                  <div class="col-sm-10">
                   <select  class="form-control" id="exampleFormControlInput1" name="hospital_id">
                       <?php while($data=mysqli_fetch_assoc($res)) { ?>
                       <option value="<?php echo $data['ID'] ?>"> <?php echo $data['USER_NAME'] ?> </option>
                       <?php } ?>
</select>
<br>
<label class="form-label" for="exampleFormControlInput1">Hospital Name</label>
<input type="text" class="form-control" id="exampleFormControlInput1" name="hospital_name">
<div class="mb-3">
    <br>
<label class="form-label" for="exampleFormControlInput1">Location</label>
<input type="text" class="form-control" id="exampleFormControlInput1" name="location">
<div class="mb-3">
    <br>
<label class="form-label" for="exampleFormControlInput1">Contact</label>
<input type="text" class="form-control" id="exampleFormControlInput1" name="contact">
<br>
<label class="form-label" for="exampleFormControlInput1">Insert Image</label>
<input type="file" class="form-control" id="exampleFormControlInput1" name="img" onChange="readURL(this)">
<img id="proimg"/>
<br>
<label class="form-label" for="exampleFormControlInput1">Details</label>
<input type="text" class="form-control" id="exampleFormControlInput1" name="dtl">
<br>
</div>
<button type="submit" class="btn btn-danger form-control" name="btn">Add</button>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.0.min.js">
</script>
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#proimg')
                    .attr('src', e.target.result)
                    .width(250)
                    .height(250)
                   .css( "visibility", "visible" );		
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
<?php include('footer.php') ?>