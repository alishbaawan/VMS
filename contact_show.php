<?php
include ('header.php'); 
include('connection.php');

$query="select * from add_contact";
$res=mysqli_query($con,$query);

?>

<div class="main_content_iner ">
<div class="container-fluid p-0">
<div class="row justify-content-center">
<div class="col-12"> 
<div class="QA_section">
<div class="white_box_tittle list_header">
<h4>CONTACT</h4>
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
    <table class="table">
    <thead>
        <tr>
            <th scope="col" style="background-color: #ce1212;">ID</th>
            <th scope="col" style="background-color: #ce1212;"> NAME </th>
            <th scope="col" style="background-color: #ce1212;"> MAIL</th>
            <th scope="col" style="background-color: #ce1212;"> SUBJECT</th>
            <th scope="col" style="background-color: #ce1212;"> MESSAGE</th>
            <th scope="col" style="background-color: #ce1212;">DELETE</th>
        </tr>
    </thead>
    <tbody>
        <?php while($data = mysqli_fetch_assoc($res)) { ?>
            <tr>
                <td><?php echo $data['ID']?></td>
                <td><?php echo $data['C_NAME']; ?></td>
                <td><?php echo $data['C_MAIL']; ?></td>
                <td><?php echo $data['C_SUBJECT']; ?></td>
                <td><?php echo $data['C_MESSAGE']; ?></td>
                <td><a href="contact_delete.php?id=<?php echo $data['ID']?>"><i class="ti-trash"></td>

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
<?php 
include ('footer.php')
?>

                
                
                
                