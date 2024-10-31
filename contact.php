<?php 
include('header.php');
include('connections.php');
?>

<main class="main">

    <!-- Contact Section -->
    <section id="contact" class="contact section light-background">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Contact</h2>
            <p><span>Need Help?</span> <span class="description-title">Contact Us</span></p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">
                <!-- Info Items -->
                <div class="col-md-6">
                    <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="200">
                        <i class="icon bi bi-geo-alt flex-shrink-0"></i>
                        <div>
                            <h3>Address</h3>
                            <p>SD-1, Block A North Nazimabad Town, Karachi, 74700</p>
                        </div>
                    </div>
                </div><!-- End Info Item -->

                <div class="col-md-6">
                    <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="300">
                        <i class="icon bi bi-telephone flex-shrink-0"></i>
                        <div>
                            <h3>Call Us</h3>
                            <p>(021) 36630102</p>
                        </div>
                    </div>
                </div><!-- End Info Item -->

                <div class="col-md-6">
                    <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="400">
                        <i class="icon bi bi-envelope flex-shrink-0"></i>
                        <div>
                            <h3>Email Us</h3>
                            <p>aptech@education.com</p>
                        </div>
                    </div>
                </div><!-- End Info Item -->

                <div class="col-md-6">
                    <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="500">
                        <i class="icon bi bi-clock flex-shrink-0"></i>
                        <div>
                            <h3>Opening Hours<br></h3>
                            <p><strong>Mon-Sat:</strong> 11AM - 11PM; <strong>Sunday:</strong> Closed</p>
                        </div>
                    </div>
                </div><!-- End Info Item -->
            </div>

            <form id="contactForm" method="post" enctype="multipart/form-data" class="php-email-form" data-aos="fade-up" data-aos-delay="600">
                <div class="row gy-4">

                    <div class="col-md-6">
                        <input type="text" name="name" id="us" class="form-control" placeholder="Your Name" required>
                        <label for="" id="userror" class="form-label"></label>
                    </div>

                    <div class="col-md-6 ">
                        <input type="email" class="form-control" name="email" id="em" placeholder="Your Email" required>
                        <label for="" id="emerror" class="form-label"></label>
                    </div>

                    <div class="col-md-12">
                        <input type="text" class="form-control" name="subject" id="sb" placeholder="Subject" required>
                        <label for="" id="sberror" class="form-label"></label>
                    </div>

                    <div class="col-md-12">
                        <textarea class="form-control" name="message" id="ms" rows="6" placeholder="Message" required></textarea>
                        <label for="" id="mserror" class="form-label"></label>
                    </div>

                    <div class="col-md-12 text-center">
                        <button type="button" class="btn btn-danger" onclick="validate()">Send Message</button>
                    </div>
                </div>
            </form><br><!-- End Contact Form --> 

            <div class="mb-5" data-aos="fade-up" data-aos-delay="500">
                <iframe style="width: 100%; height: 400px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3618.137712000842!2d67.03045847607635!3d24.927378142575275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33f90157042d3%3A0x93d609e8bec9a880!2sAptech%20Computer%20Education%20North%20Nazimabad%20Center!5e0!3m2!1sen!2s!4v1726487685177!5m2!1sen!2s" frameborder="0" allowfullscreen=""></iframe>
            </div><!-- End Google Maps -->
        </div>
    </section><!-- /Contact Section -->
</main>

<script>
function validate() {
    var name = document.getElementById('us').value;
    var email = document.getElementById('em').value;
    var subject = document.getElementById('sb').value;
    var message = document.getElementById('ms').value;

    var namePattern = /^[A-Za-z ]{3,20}$/;
    var emailPattern = /^[A-Za-z0-9._%+-]+@(gmail|outlook|hotmail|yahoo)\.[a-zA-Z]{2,}$/;
    var subjectPattern = /^[A-Za-z0-9 ]{1,50}$/;
    var messagePattern = /^[A-Za-z0-9 .,?!]{1,500}$/; 

    var valid = true; 

    if (namePattern.test(name)) {
        document.getElementById('userror').innerHTML = "";
        document.getElementById('us').style.borderColor = "green";
    } else {
        document.getElementById('userror').innerHTML = "Name must be 3-20 characters and contain no numbers.";
        document.getElementById('userror').style.color = "red";
        valid = false;
    }

    if (emailPattern.test(email)) {
        document.getElementById('emerror').innerHTML = "";
        document.getElementById('em').style.borderColor = "green";
    } else {
        document.getElementById('emerror').innerHTML = "Email is invalid!";
        document.getElementById('emerror').style.color = "red";
        valid = false;
    }

    if (subjectPattern.test(subject)) {
        document.getElementById('sberror').innerHTML = "";
        document.getElementById('sb').style.borderColor = "green";
    } else {
        document.getElementById('sberror').innerHTML = "Subject can only contain letters, numbers, and spaces.";
        document.getElementById('sberror').style.color = "red";
        valid = false;
    }

    if (messagePattern.test(message)) {
        document.getElementById('mserror').innerHTML = "";
        document.getElementById('ms').style.borderColor = "green";
    } else {
        document.getElementById('mserror').innerHTML = "Message must be at least 1 character long and can include basic punctuation.";
        document.getElementById('mserror').style.color = "red";
        valid = false;
    }

    if (valid) {
        document.getElementById('contactForm').submit(); // Submit the form
    }
}
</script>

<?php 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize and validate input
    $contact_name = mysqli_real_escape_string($con, trim($_POST['name']));
    $contact_email = mysqli_real_escape_string($con, trim($_POST['email']));
    $contact_subject = mysqli_real_escape_string($con, trim($_POST['subject']));
    $contact_message = mysqli_real_escape_string($con, trim($_POST['message']));
 
    // Check if fields are empty
    if (empty($contact_name) || empty($contact_email) || empty($contact_subject) || empty($contact_message)) {
        echo "<script>alert('All fields are required.');window.history.back();</script>";
        exit();
    }

    // Prepare the SQL statement
    $q = "INSERT INTO add_contact (C_NAME, C_MAIL, C_SUBJECT, C_MESSAGE) VALUES ('$contact_name', '$contact_email', '$contact_subject', '$contact_message')";

    $res = mysqli_query($con, $q);
  
    if ($res) {
        echo "<script>alert('Form submitted successfully.');window.location.href='contact.php'</script>";
    } else {
        echo "<script>alert('Error: " . mysqli_error($con) . "');window.history.back();</script>";
    }
}
?>

<?php include('footer.php'); ?>
