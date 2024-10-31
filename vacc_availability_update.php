<?php
include('connection.php');
if(isset($_POST['sub'])){
    $id = $_POST['app_id']; // Get the ID from the hidden input field
    $status = $_POST['status'];

    // Update the available_vaccine table with the new status and vaccine ID
    $q = "UPDATE available_vaccine SET  STATUS = '$status' WHERE ID = '$id'";
    $res = mysqli_query($con, $q);

    if($res){
        echo "<script>alert('Updated Successfully');window.location.href='vacc_availability_show.php'</script>";
    } else {
        echo mysqli_error($con);
    }
}
?>
