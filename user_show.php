<?php
include ('header.php');
include('connection.php');
$query="select * from add_user";
$res=mysqli_query($con,$query);?>


<div class="main_content_iner ">
<div class="container-fluid p-0">
<div class="row justify-content-center">
<div class="col-12"> 
<div class="QA_section">
<div class="white_box_tittle list_header">
<h4>Users</h4>
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
<th scope="col" style="background-color: #ce1212;">ID</th>
<th scope="col" style="background-color: #ce1212;">USERNAME</th>
<th scope="col" style="background-color: #ce1212;">PASSWORD</th>
<th scope="col" style="background-color: #ce1212;">CONTACT</th>
<th scope="col" style="background-color: #ce1212;">USER IMAGE</th>
<th scope="col" style="background-color: #ce1212;">UPDATE</th>
<th scope="col" style="background-color: #ce1212;">DELETE</th>
</tr>
</thead>
<tbody>
    
<?php while($data=mysqli_fetch_assoc($res)) { ?>
<tr>
<td><?php echo $data['ID']?></td>
<td><?php echo $data['USER_NAME']?></td>
<td><?php echo $data['PASSWORD']?></td>
<td><?php echo $data['PHONE']?></td>
<td><img src="<?php echo $data['USER_PIC']?>" height=100/></td>
<td><a href="user_update_form.php?id=<?php echo $data['ID']?>"><i class="ti-pencil"></i></a></td>
<td><a href="user_delete.php?id=<?php echo $data['ID']?>"><i class="ti-trash"></i></a></td>

<!-- <td><a href="#" class="status_btn">Active</a></td> -->
</tr>
<?php } ?>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>


<?php include ('footer.php'); ?>