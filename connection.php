<?php
$con=mysqli_connect('localhost','root','','epro');
if(!$con){
    echo "<script>alert('connction error');window.location.href='index.php'</script>";
}


?>