
<!-- testing -->
<?php
include('connection.php');
if(isset($_POST['btn'])){
$id=$_POST['u_id'];
$user_img_name=$_FILES['u_image']['name'];
$user_img_tname=$_FILES['u_image']['tmp_name'];
$user_img_size=$_FILES['u_image']['size'];
$user_img_type=$_FILES['u_image']['type'];
$folder='assets/img/admin/';
$path=$folder.$user_img_name;
move_uploaded_file($user_img_tname,$path);

if($user_img_type=='image/png' || $user_img_type=='image/jpg' || $user_img_type=='image/jpeg')
{
    if($user_img_size<=10000000){
         $q="update add_user set USER_PIC='$path' where ID='$id'";
        $res=mysqli_query($con,$q);
if($res){
    echo "<script>alert('Image Updated Successfully');window.location.href='index.php'</script>";
}
else{
    echo mysqli_error($con);
}
    }

    else{
        echo "<script>alert('Size Error');</script>";
    }
}
else{
    echo "<script>alert('Format Error');</script>";
}

}
?>