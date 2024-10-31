<?php 
include('header.php'); 
include('connections.php');
?> 

<main class="main">
    <section class="section light-background">
        <div class="container ">
            <div class="st-height-b120 st-height-lg-b80"></div>
            <div class="st-section-heading st-style1">
                <h2 class="st-section-heading-title">Sign Up </h2>
                <div class="st-seperator">
                    <div class="st-seperator-left"></div>
                    <div class="st-seperator-center">
                        <img src="assets/img/front/icon.png" alt="icon" style="width: 20px; height: 20px;">
                    </div>
                    <div class="st-seperator-right"></div>
                </div>
                <div class="st-section-heading-subtitle">If you have an account, <a href="login.php">log in</a> here.</div><br>
            </div> 
            <div id="contactForm" class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <form method="POST" action="" enctype="multipart/form-data">
                            <div id="st-alert1"></div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="st-form-field st-style1">
                                        <label for="name" class="form-label">Username</label>
                                        <input type="text" name="name" id="us" placeholder="Enter Username">
                                        <label for="" id="userror" class="form-label"></label>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="st-form-field st-style1">
                                        <label for="pass" class="form-label">Password</label>
                                        <input type="password" name="pswd" id="ps" placeholder="Enter Password">
                                        <label for="" id="pserror" class="form-label"></label>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="st-form-field st-style1">
                                        <label for="phone" class="form-label">Contact </label> 
                                        <input type="text" name="con" id="pn" placeholder="Enter Contact No">
                                        <label for="" id="pnerror" class="form-label"></label>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="st-form-field st-style1">
                                        <label>Image </label>
                                        <input type="file" name="imng" placeholder="Insert Image">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <button type="button" class="btn btn-danger" onclick="validate()">Sign Up</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="st-height-b120 st-height-lg-b80"></div>
            </div>
        </section>
    </main>

<script>
function validate(){
    var name = document.getElementById('us').value;
    var pass = document.getElementById('ps').value;
    var phone = document.getElementById('pn').value;

    var namepattern = /^[A-Za-z ]{3,20}$/;
    var phonepattern = /^[0-9]{11,}$/;
    var passpattern = /^[A-Za-z0-9]{8,30}$/;

    var valid = true;

    if(namepattern.test(name)){
        document.getElementById('userror').innerHTML = "";
        document.getElementById('us').style.borderColor = "green";
    } else {
        document.getElementById('userror').innerHTML = "Username is too short and can't have numbers.";
        document.getElementById('userror').style.color = "red";
        valid = false;
    }

    if(phonepattern.test(phone)){
        document.getElementById('pnerror').innerHTML = "";
        document.getElementById('pn').style.borderColor = "green";
    } else {
        document.getElementById('pnerror').innerHTML = "Your phone number is invalid!";
        document.getElementById('pnerror').style.color = "red";
        valid = false;
    }

    if(passpattern.test(pass)){
        document.getElementById('pserror').innerHTML = "";
        document.getElementById('ps').style.borderColor = "green";
    } else {
        document.getElementById('pserror').innerHTML = "Password is too short!";
        document.getElementById('pserror').style.color = "red";
        valid = false;
    }

    if (valid) {
        document.querySelector('form').submit(); // Submit the form if valid
    }
}
</script>

<?php 
include('footer.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize and validate input
    $user_name = mysqli_real_escape_string($con, trim($_POST['name']));
    $user_password = mysqli_real_escape_string($con, trim($_POST['pswd']));
    $user_contact = mysqli_real_escape_string($con, trim($_POST['con']));
    
    // Handle file upload
    $user_img_name = $_FILES['imng']['name'];
    $user_img_tname = $_FILES['imng']['tmp_name'];
    $user_img_size = $_FILES['imng']['size'];
    $user_img_type = $_FILES['imng']['type'];
    
    $folder = 'assets/img/user/';
    $path = $folder . basename($user_img_name);

    // Check for valid image types and size
    if (($user_img_type == 'image/png' || $user_img_type == 'image/jpg' || $user_img_type == 'image/jpeg') && $user_img_size <= 10000000) {
        // Move the uploaded file
        if (move_uploaded_file($user_img_tname, $path)) {
            // Prepare the SQL statement
            $q = "INSERT INTO add_user (ROLE_ID, USER_NAME, PASSWORD, PHONE, USER_PIC) VALUES (2, '$user_name', '$user_password', '$user_contact', '$path')";
            $res = mysqli_query($con, $q);
            
            if ($res) {
                echo "<script>alert('Your account has been created. Log in now.');window.location.href='login.php'</script>";
            } else {
                echo "<script>alert('Error: " . mysqli_error($con) . "');window.history.back();</script>";
            }
        } else {
            echo "<script>alert('Failed to upload image.');window.history.back();</script>";
        }
    } else {
        if ($user_img_size > 10000000) {
            echo "<script>alert('File size exceeds limit.');window.history.back();</script>";
        } else {
            echo "<script>alert('Invalid image format.');window.history.back();</script>";
        }
    }
}
?>
