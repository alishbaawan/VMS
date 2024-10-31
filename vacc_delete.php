<?php
include('connection.php');
$i=$_GET['id'];

$q="DELETE FROM `add_vaccine` WHERE ID='$i'";
$res=mysqli_query($con,$q);
if($res)
{
    echo "<script>alert('Deleted Succesfully');window.location.href='vacc_show.php'</script>";
}
else{
    echo mysqli_error($con);
}

?> 