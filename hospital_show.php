<?php include('header.php');
include('connection.php');
$q="select * from add_hospital";
$res=mysqli_query($con,$q);
?>
<div class="main_content_iner ">
<div class="container-fluid p-0">
<div class="row justify-content-center">
<div class="col-12">
<div class="QA_section"> 
<div class="white_box_tittle list_header">
<h4>Hospitals</h4>
<div class="box_right d-flex lms_block">
<div class="serach_field_2">
<div class="search_inner">
<form Active="#">
<div class="search_field">

</div>

</form>
</div>
</div>
<div class="add_button ms-2">

</div>
</div>
</div>
<div class="QA_table mb_30">

<table class="table lms_table_active">
<thead>
<tr>
<th scope="col" style="background-color: #ce1212;">Id</th>
<th scope="col" style="background-color: #ce1212;">Hospital Name</th>
<th scope="col" style="background-color: #ce1212;">Location</th>
<th scope="col" style="background-color: #ce1212;">Contact</th>
<th scope="col" style="background-color: #ce1212;">Image</th>
<th scope="col" style="background-color: #ce1212;">Details</th>
<th scope="col" style="background-color: #ce1212;">Update</th>
<th scope="col" style="background-color: #ce1212;">Delete</th>
</tr>
</thead>
<tbody>
<?php while($data=mysqli_fetch_assoc($res)) { ?> 
<tr>
<td><?php echo $data['ID']?></td>
<td><?php echo $data['HOSPITALS_NAME']?></td>
<td><?php echo $data['LOCATION']?></td>
<td><?php echo $data['CONTACT']?></td>
<td><img src="<?php echo $data['HOSPITALS_PIC']?>" height=100/></td>
<td><?php echo $data['DETAILS']?></td>
<td><a href="hospital_update_form.php?id=<?php echo $data['ID']?>"><i class="ti-pencil"></i></a></td>
<td><a href="hospital_delete.php?id=<?php echo $data['ID']?>"><i class="ti-trash"></i></a></td>
</tr>
<?php } ?>
</tbody>
<?php include('footer.php') ?>