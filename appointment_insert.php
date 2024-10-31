<?php
include('connections.php');
if(isset($_POST['btn'])){
    $parent_id=$_POST['p_id'];
    $child_id=$_POST['cname'];
    $hospital_id=$_POST['h_id'];
    $vaccine_id=$_POST['vacc_id'];
    $date=$_POST['date'];
    $time=$_POST['time'];
    $q="INSERT INTO add_appointment(`USER_ID`, `CHILD_ID`, `HOSPITAL_ID`, `VACCINE_ID`, `DATE`, `STATUS`, `TIME`) 
    VALUES ('$parent_id','$child_id','$hospital_id','$vaccine_id','$date','Pending','$time')";
    $res=mysqli_query($con,$q);
    if($res){
        echo "<script>alert('Appointment scheduled. Confirmation pending. Check your Appointments. ');window.location.href='appointment.php'</script>";
    }
    else{
        echo mysqli_error($con);
    }
    }
?>