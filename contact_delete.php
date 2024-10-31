<?php
include('connection.php');
$i=$_GET['id'];
$q="delete from add_contact where ID='$i'";
$res=mysqli_query($con,$q);
if($res)
{
    echo "<script>alert('Deleted Succesfully');window.location.href='contact_show.php'</script>";
}
else{
    echo mysqli_error($con);
}

?>