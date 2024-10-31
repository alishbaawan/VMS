<?php
include('connection.php');
if (isset($_POST['btn'])) {
    $id = $_POST['HOSPITAL_ID'];
    $hospital_name = mysqli_real_escape_string($con, $_POST['HOSPITAL_NAME']); 
    $hospital_location = mysqli_real_escape_string($con, $_POST['LOCATION']);
    $hospital_contact = mysqli_real_escape_string($con, $_POST['CONTACT']);
    $hospital_details = mysqli_real_escape_string($con, $_POST['DETAILS']);
    $hospital_img_name = $_FILES['IMAGE']['name'];
    $hospital_img_tname = $_FILES['IMAGE']['tmp_name']; 
    $hospital_img_size = $_FILES['IMAGE']['size']; 
    $hospital_img_type = $_FILES['IMAGE']['type'];

    // Begin constructing the update query
    $update_query = "UPDATE add_hospital SET HOSPITALS_NAME='$hospital_name', LOCATION='$hospital_location', 
                     CONTACT='$hospital_contact', DETAILS='$hospital_details'";

    if (is_uploaded_file($hospital_img_tname)) {
        $folder = 'assets/img/hospital/';
        $path = $folder . $hospital_img_name;

        if ($hospital_img_type == "image/png" || $hospital_img_type == "image/jpg" || $hospital_img_type == "image/jpeg") {
            if ($hospital_img_size < 1000000000) {
                move_uploaded_file($hospital_img_tname, $path);
                $update_query .= ", HOSPITALS_PIC='$path'"; // Append the image update
            } else {
                echo "<script>alert('Please choose a smaller size image.');window.location.href='hospital_show.php'</script>";
                exit();
            }
        } else {
            echo "<script>alert('Please choose a correct format image (PNG, JPG, JPEG).');window.location.href='hospital_show.php'</script>";
            exit();
        }
    }

    $update_query .= " WHERE ID='$id'";

    // Log the final query to check for syntax errors
    // Uncomment the next line to see the SQL query in the error log
    // error_log($update_query);

    $res = mysqli_query($con, $update_query);

    if ($res) {
        echo "<script>alert('Updated Successfully');window.location.href='hospital_show.php'</script>";
    } else {
        echo mysqli_error($con);
    }
}
?>
