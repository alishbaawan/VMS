<?php
include('connection.php');
if(isset($_POST['btn'])){
$cat_id=$_POST['c_id'];
$vaccine_name=$_POST['vacc_name'];
$vaccine_dosage=$_POST['dsg'];
$q="insert into add_vaccine(`VAC_ID`, `VAC_NAME`, `DOSAGE`) VALUES ('$cat_id','$vaccine_name','$vaccine_dosage')";
$res=mysqli_query($con,$q);
if($res){
    echo "<script>alert('Vaccine Inserted');window.location.href='vacc_form.php'</script>";
}
else{
    echo mysqli_error($con);
}
}

?> 