<?php
include('connections.php');
if(isset($_POST['btn'])){
  $parent_id = $_POST['parent_id'];
  $dob = $_POST['d_o_b'];
  $child_name = $_POST['c_name'];
  $blood_group = $_POST['b_group'];
  $gender = $_POST['gender'];
  $b_form = $_POST['b_form'];
  $p_cnic_no = $_POST['p_cnic']; // Capture the parent's CNIC
  $child_img_name = $_FILES['c_image']['name'];
  $child_img_tname = $_FILES['c_image']['tmp_name'];
  $child_img_size = $_FILES['c_image']['size'];
  $child_img_type = $_FILES['c_image']['type'];
  $folder = 'assets/img/child/';
  $path = $folder . $child_img_name;
  
  move_uploaded_file($child_img_tname, $path);
   
  if ($child_img_type == 'image/png' || $child_img_type == 'image/jpg' || $child_img_type == 'image/jpeg') {
      if ($child_img_size <= 10000000) {
          // Check if parent_id exists in users table
          $check_query = "SELECT ID FROM add_user WHERE ID = '$parent_id'";
          $check_result = mysqli_query($con, $check_query);
          
          if (mysqli_num_rows($check_result) > 0) {
              $q = "INSERT INTO add_child(`PARENT_ID`, `D_O_B`, `CHILD_NAME`, `BLOOD_GROUP`, `GENDER`, `B_FORM`, `PARENT_CNIC`, `CHILD_PIC`)
                    VALUES ('$parent_id','$dob','$child_name','$blood_group','$gender','$b_form','$p_cnic_no','$path')";
              $res = mysqli_query($con, $q);
              
              if ($res) {
                  echo "<script>alert('Child details added successfully.'); window.location.href='add_child_details.php';</script>";
              } else {
                  echo mysqli_error($con);
              }
          } else {
              echo "<script>alert('Parent ID does not exist.');</script>";
          }
      } else {
          echo "<script>alert('Size error');</script>";
      }
  } else {
      echo "<script>alert('Format error');</script>";
  }
}
?>