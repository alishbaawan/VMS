<?php include('header.php');
include('connection.php');
$q="select count(*) as admin from add_user where ROLE_ID='1'";
$res=mysqli_query($con,$q);
$data=mysqli_fetch_assoc($res);


$q1="select count(*) as hospitals from add_user where ROLE_ID='3'";
$res1=mysqli_query($con,$q1);
$data1=mysqli_fetch_assoc($res1);


$q2="select count(*) as parents from add_user where ROLE_ID='2'";
$res2=mysqli_query($con,$q2);
$data2=mysqli_fetch_assoc($res2);
?>
<!DOCTYPE html>
<html lang="zxx">


<head>





</html>

<?php include('footer.php') ?>