<?php
include('connections.php');
if(isset($_POST['sub'])){
$id=$_POST['hidden_id'];
$pass=$_POST['pass'];
$q="update add_user set PASSWORD = '$pass' where ID = '$id'";
$res=mysqli_query($con,$q);
if($res){
    echo "<script>alert('Updated Successfully');window.location.href='home.php'</script>";
}
else{
    echo mysqli_error($con);
}
}


?>