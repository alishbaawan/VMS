<?php include('header.php');
include('connection.php');
$q="select * from add_role";
$res=mysqli_query($con,$q);

$i=$_GET['id'];
$q1="select * from add_user where ID='$i'";
$res1=mysqli_query($con,$q1);
$data1=mysqli_fetch_assoc($res1);


?>

<div class="container-fluid p-0">
<div class="row justify-content-center">
<div class="col-lg-12"> 
<div class="white_box mb_30">
<div class="box_header ">
<div class="main-title">
<h3 class="mb-0">Add Your User</h3>
</div>
</div>
<form method="POST" action="user_update.php" enctype="multipart/form-data">
<input type="hidden" class="form-control" name="u_id" value="<?php echo $data1['ID'] ?>">
<div class="mb-3">

<label class="form-label" for="exampleFormControlInput1">ROLE</label>
<select  class="form-control" name="u_r_id">
                       <?php while($data=mysqli_fetch_assoc($res)) { ?>
                       <option value="<?php echo $data['ID'] ?>" <?php  if($data['ID']==$data1['ROLE_ID'])  { echo 'selected'; }  ?>> <?php echo $data['ROLE_NAME'] ?> </option>
                       <?php } ?>
</select>
</div>
<div class="mb-3">
<label class="form-label" for="exampleFormControlInput1">USERNAME</label>
<input type="text" class="form-control" id="exampleFormControlInput1" name="u_name" value="<?php echo $data1['USER_NAME'] ?>">
</div>
<div class="mb-3">
<label class="form-label" for="exampleFormControlInput1">PASSWORD</label>
<input type="password" class="form-control" id="exampleFormControlInput1" name="pwsd" value="<?php echo $data1['PASSWORD'] ?>">
</div>
<div class="mb-3">
<label class="form-label" for="exampleFormControlInput1">CONTACT</label>
<input type="text" class="form-control" id="exampleFormControlInput1" name="cnt" value="<?php echo $data1['PHONE'] ?>">
</div>
<div class="mb-3">
<label class="form-label" for="exampleFormControlInput1">USER_IMAGE</label>
<input type="file" class="form-control" id="exampleFormControlInput1" onChange="readURL(this)" name="u_image">
<img id="proimg" src="<?php echo $data1['USER_PIC'] ?>" height=70/>
</div>
<button type="submit" class="btn btn-danger form-control" name="btn">UPDATE</button>

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