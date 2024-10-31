<?php
include('header.php');
include('connections.php');
$q="select * from add_hospital";
$res=mysqli_query($con,$q); 

$q1="select count(*) as vaccine_category from add_category";
$res1=mysqli_query($con,$q1);
$data1=mysqli_fetch_assoc($res1);
?>


  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section light-background">

      <div class="container">
        <div class="row gy-4 justify-content-center justify-content-lg-between">
          <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <h1 data-aos="fade-up">VACCINATION<br>MANNAGEMENT SYSTEM</h1>
            <p data-aos="fade-up" data-aos-delay="100">It ensures timely vaccinations, prevents outbreaks, and provides valuable data for public health initiatives.</p>
            <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
              <a href="appointment.php" class="btn-get-started">Book your Appointment</a>
            </div>
          </div>
          <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
            <img src="assets/img/front/home1.png" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>

    </section>



    <section class="about section">

      <!-- Start statistics section -->
      <div class="container section-title" data-aos="fade-up">
        <p><span>What is</span> <span class="description-title">Vaccination?</span></p>
      </div>

      <div class="container">

        <div class="row gy-4">
          <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
            <img src="assets/img/front/home2.png" class="img-fluid mb-4" alt="">
          </div>
          <div class="col-lg-5" data-aos="fade-up" data-aos-delay="250">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
              Vaccination involves administering a vaccine to stimulate the immune system to recognize and fight specific pathogens, like viruses or bacteria. It is crucial for children because it:
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i><span><b>Prevents Diseases:</b> Vaccines protect against serious and potentially life-threatening diseases..</span></li>
                <li><i class="bi bi-check-circle-fill"></i><b><span>Promotes Herd Immunity:</b> High vaccination rates help protect those who cannot be vaccinated, such as infants or those with certain medical conditions..</span></li>
                <li><i class="bi bi-check-circle-fill"></i><b><span> Reduces Disease Spread:</b> Vaccination lowers the incidence of diseases, leading to fewer outbreaks and lower healthcare costs.</span></li>
                <li><i class="bi bi-check-circle-fill"></i><b><span> Ensures Healthy Development:</b> By preventing illness, vaccines contribute to overall health and development, allowing children to grow and thrive.</span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section> <!-- end statistics section  -->

          <!-- Why Us Section -->
          <section id="why-us" class="why-us section light-background">

<div class="container">

  <div class="row gy-4">

    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
      <div class="why-box">
        <h3>About us</h3>
        <p>
        A vaccination management system is a web-based application designed to streamline the scheduling, tracking, and documentation of vaccinations. It typically allows users to book appointments, receive reminders, update vaccination records, and access personal health information securely.
        </p>
        <div class="text-center">
          <a href="about.php" class="more-btn"><span>Learn More</span> <i class="bi bi-chevron-right"></i></a>
        </div>
      </div>
    </div><!-- End Why Box -->

    <div class="col-lg-8 d-flex align-items-stretch">
      <div class="row gy-4" data-aos="fade-up" data-aos-delay="200">

        <div class="col-xl-4">
          <div class="icon-box d-flex flex-column justify-content-center align-items-center">
            <i class="far fa-hospital"></i>
            <h4>Hospitals</h4>
            <p>We have city's best hospitals registered</p>
          </div>
        </div><!-- End Icon Box -->

        <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
          <div class="icon-box d-flex flex-column justify-content-center align-items-center">
            <i class="fas fa-syringe"></i>
            <h4>Vaccines</h4>
            <p>We have almost all disease vaccines available.</p>
          </div>
        </div><!-- End Icon Box -->

        <div class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
          <div class="icon-box d-flex flex-column justify-content-center align-items-center">
            <i class="fas fa-hospital-user"></i>
            <h4>Book your Appointments</h4>
            <p>Book an appointment as per your comfort by selecting vaccination as per your need.</p>
          </div>
        </div><!-- End Icon Box -->

      </div>
    </div>

  </div>

</div>

</section><!-- /Why Us Section -->

    <!-- Gallery Section -->
    <section id="gallery" class="gallery section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <p>Gallery</p>
        <h5>Discover the milestones and efforts in our vaccination campaign.</h5>
      </div><!-- End Section Title -->

      <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-0">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-1.jpg" class="glightbox" data-gallery="images-gallery">
                <img src="assets/img/front/gallery-1.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-2.jpg" class="glightbox" data-gallery="images-gallery">
                <img src="assets/img/front/gallery-2.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-3.jpg" class="glightbox" data-gallery="images-gallery">
                <img src="assets/img/front/gallery-3.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-4.jpg" class="glightbox" data-gallery="images-gallery">
                <img src="assets/img/front/gallery-4.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-5.jpg" class="glightbox" data-gallery="images-gallery">
                <img src="assets/img/front/gallery-5.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-6.jpg" class="glightbox" data-gallery="images-gallery">
                <img src="assets/img/front/gallery-6.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-7.jpg" class="glightbox" data-gallery="images-gallery">
                <img src="assets/img/front/gallery-7.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-8.jpg" class="glightbox" data-gallery="images-gallery">
                <img src="assets/img/front/gallery-8.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->
        </div>
      </div>
    </section><!-- /Gallery Section -->


    <!-- Departments Section -->
    <section id="departments" class="departments section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <p>Just Answer the <span class="description-title">Questions?</span></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#departments-tab-1">What is VMS?</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#departments-tab-2">How do I book an appointment?</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#departments-tab-3">Are all kind of vaccine available?</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="departments-tab-1">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>What is VMS?</h3>
                    <p class="fst-italic">A Vaccination Management System (VMS) is a specialized system designed to streamline and optimize the management of vaccination processes.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/front/home3.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="departments-tab-2">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>How do I book an appointment?</h3>
                    <p class="fst-italic">To book an appointment you need to login first, Add your child details then book an appointment.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/front/home4.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="departments-tab-3">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Are all kind of vaccine available?</h3>
                    <p class="fst-italic">To some extent we have vaccines available of many disease/infection such as polio,covid and more.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/front/home5.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Departments Section -->

  </main>


  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- footer  -->
  <?php
    include('footer.php')
  ?>

