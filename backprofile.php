<?php include ('header.php');
include('connection.php');
$i=$_GET['id'];
$query="select * from add_user where USER_NAME='$i'";
$res=mysqli_query($con,$query);
$data=mysqli_fetch_assoc($res); ?>
<style>
    .align{
        float: left;
        margin-left: 20%;
        margin-top: 3%;
        height: 300;
        width: 300;
    }
    .align-text{
        float: left;
        margin-left: 25%;
        margin-top: 1%;
        color: #2daab8;
       
    }
    .aligntab{
        margin-top: 2%;
        margin-left: 20%;
        margin-bottom: 5%;
        
    }
    th{
        color: #2daab8;
    }
</style>
<h1 style= "color: #ce1212;margin-left: 10%;">MY PROFILE</h1>
<div class="row">
<div class="col-lg-12">
<img src="<?php echo $data['USER_PIC'] ?>"  class="align">
</div>
<div class="col-lg-12">
<h6 class="align-text" ><a href="admin_image_changeform.php?id=<?php echo $data['ID']?>" style="color: #ce1212;">Change Profile Picture</a></h6>
</div>
<div class="col-lg-12">
          <table class="aligntab">
          <?PHP if(isset($_SESSION['ADMIN_NAME'])){?>
            <tr>
                <th style="color: #ce1212;">Username :</th>
                <td><?php echo $_SESSION['ADMIN_NAME'] ?></td>
            </tr>
            <tr>
                <th style="color: #ce1212;">Password :</th>
                <td><?php echo $data['PASSWORD'] ?><span><a href="admin_pass_changeform.php?id=<?php echo $data['ID']?>"> (Change Your Password)</a></span></td>
            </tr>
            <tr>
                <th style="color: #ce1212;">Contact No :</th>
                <td><?php echo $data['PHONE'] ?></td>
            </tr>
            <?PHP } else if(isset($_SESSION['HOSP_NAME'])) { ?>
                <tr>
                <th style="color: #ce1212;">Username :</th>
                <td><?php echo $_SESSION['HOSP_NAME'] ?></td>
            </tr>
            <tr>
                <th style="color: #ce1212;">Password :</th>
                <td><?php echo $data['PASSWORD'] ?><span><a href="admin_pass_changeform.php?id=<?php echo $data['ID']?>"> (Change Your Password)</a></span></td>
            </tr>
            <tr>
                <th style="color: #ce1212;">Contact No :</th>
                <td><?php echo $data['PHONE'] ?></td>
            </tr>
            <?PHP } ?>
            
          </table>
</div>
</div>

          
<?php include ('footer.php')?>