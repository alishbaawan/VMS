<?php include('header.php'); include('connections.php'); ?>
<?php $q = "SELECT * FROM add_user WHERE ROLE_ID='2'"; $res = mysqli_query($con, $q); ?>

<section class="st-shape-wrap section light-background" id="contact">
    <div class="container">
        <div class="st-section-heading st-style1">
            <h2 class="st-section-heading-title">Child Details</h2>
            <div class="st-seperator">
                <div class="st-seperator-left"></div>
                <div class="st-seperator-center">
                    <img src="assets/img/front/icon.png" alt="icon" style="width: 20px; height: 20px;">
                </div>
                <div class="st-seperator-right"></div>
            </div>
            <div class="st-section-heading-subtitle">Insert Your Child Details by Filling the form</div>
        </div>
        <br>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div id="st-alert"></div>
                <form action="add_child_insert.php" class="row st-contact-form st-type1" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
                    <div class="col-lg-6">
                        <div class="st-form-field st-style1">
                            <label>Username</label>
                            <input type="hidden" name="parent_id" value="<?php echo $_SESSION['USER_ID'] ?>">
                            <input type="text" value="<?php echo $_SESSION['USER_NAME'] ?>" readonly>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="st-form-field st-style1">
                            <label>Date Of Birth</label>
                            <input type="date" id="date" name="d_o_b" required>
                            <label id="dobError" class="form-label"></label>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="st-form-field st-style1">
                            <label>Child Name</label>
                            <input type="text" placeholder="Enter Child Name" required name="c_name" id="child_name">
                            <label id="childNameError" class="form-label"></label>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="st-form-field st-style1">
                            <label>Blood Group</label>
                            <select required name="b_group">
                                <option></option>
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB-</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="st-form-field st-style1">
                            <label>Gender</label>
                            <select required name="gender">
                                <option></option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="st-form-field st-style1">
                            <label>Birth Form</label>
                            <input type="text" placeholder="Enter B-Form No" required name="b_form" id="b_form">
                            <label id="bFormError" class="form-label"></label>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="st-form-field st-style1">
                            <label>Parent's CNIC</label>
                            <input type="text" placeholder="Enter Parent Nic" required name="p_cnic" id="p_cnic">
                            <label id="pCnicError" class="form-label"></label>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="st-form-field st-style1">
                            <label>Child Picture</label>
                            <input type="file" placeholder="Insert Child's Picture" onChange="readURL(this)" required name="c_image">
                            <img id="proimg" style="visibility: hidden;"/>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="text-center">
                            <button class="st-btn st-style1 st-color1 st-size-medium" type="submit" name="btn">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="st-height-b120 st-height-lg-b80"></div>
</section>

<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.0.min.js"></script>
<script>
    function validateForm() {
        let valid = true;

        const childName = document.getElementById('child_name').value;
        const namePattern = /^[a-zA-Z ]{3,}$/;
        if (!namePattern.test(childName)) {
            document.getElementById('childNameError').innerText = 'Child Name must be at least 3 alphabetic characters.';
            document.getElementById('childNameError').style.color = 'red';
            valid = false;
        } else {
            document.getElementById('childNameError').innerText = '';
        }

        const dob = new Date(document.getElementById('date').value);
        const today = new Date();
        if (dob > today) {
            document.getElementById('dobError').innerText = 'Date of Birth cannot be a future date.';
            document.getElementById('dobError').style.color = 'red';
            valid = false;
        } else {
            document.getElementById('dobError').innerText = '';
        }

        const pCnic = document.getElementById('p_cnic').value;
        if (!/^\d{13}$/.test(pCnic)) {
            document.getElementById('pCnicError').innerText = 'Parent\'s CNIC must be exactly 13 digits.';
            document.getElementById('pCnicError').style.color = 'red';
            valid = false;
        } else {
            document.getElementById('pCnicError').innerText = '';
        }

        const bForm = document.getElementById('b_form').value;
        if (!/^\d{13}$/.test(bForm)) {
            document.getElementById('bFormError').innerText = 'Birth Form must be exactly 13 digits.';
            document.getElementById('bFormError').style.color = 'red';
            valid = false;
        } else {
            document.getElementById('bFormError').innerText = '';
        }

        return valid; // Return whether all validations passed
    }

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#proimg')
                    .attr('src', e.target.result)
                    .width(250)
                    .height(250)
                    .css("visibility", "visible");
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

<?php include('footer.php'); ?>
