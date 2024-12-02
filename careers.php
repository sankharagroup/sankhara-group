<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sankhara Digital</title>
    <!-- Favicon -->
    <link rel="icon" href="assets/images/logo/sh-logo.png" type="image/png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    
    <!-- Animate.css for animations -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <?php include 'navbar.php'; ?>

    <!-- About Us Section -->
    <section id="sg-about" class="sg-about py-5">
        <div class="container custom-container ">
            <div class="row align-items-center">
                <div class="col-lg-8 p-2 wow animate__animated animate__fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
                    <h2 class="sg-about-title">Join the team driving innovation <br>and shaping the future of work.</h2>
                    <a href="" class="btn btn-custom">Join us</a>
                </div>
                <div class="col-lg-4 p-2 wow animate__animated animate__fadeInRight" data-wow-duration="1s" data-wow-delay="0.4s">
                    <img src="assets/images/careers/hero-image.png" alt="Team Meeting" class="sg-about-img img-fluid rounded">
                </div>
            </div>
        </div>
    </section>

    <section class="current-job bg-white py-4">    
    <div class="container custom-container ">
        <a href="" class="btn btn-light">Jobs</a>
            <h3 class="pt-3">Current Job Openings</h3>
    <div class="accordion" id="jobAccordion">

        <!-- Marketing Head -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <div class="job-info">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne"></button>
                    <span class="job-title">Marketing Head</span>
                </div>
                <div class="location">
                    <span>Karnataka</span>
                    <span>Bangalore</span>
                </div>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#jobAccordion">
                <div class="accordion-body">
                    Marketing Head job description or details go here.
                </div>
            </div>
        </div>

        <!-- Manager -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <div class="job-info">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"></button>
                    <span class="job-title">Manager</span>
                </div>
                <div class="location">
                    <span>Karnataka</span>
                    <span>Bangalore</span>
                </div>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#jobAccordion">
                <div class="accordion-body">
                    Manager job description or details go here.
                </div>
            </div>
        </div>

        <!-- Project Manager -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <div class="job-info">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"></button>
                    <span class="job-title">Project Manager</span>
                </div>
                <div class="location">
                    <span>Karnataka</span>
                    <span>Bangalore</span>
                </div>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#jobAccordion">
                <div class="accordion-body">
                    Project Manager job description or details go here.
                </div>
            </div>
        </div>

    </div>
</div>
    </section>

    <section class="py-5" style="background-color: #2b2b2b;">
        <div class="container custom-container ">
            <div class="row ">
                <div class="col-lg-6 d-flex align-items-center justify-content-center">
                    <h4 class="text-white">Subscribe to us and get the latest<br> updates</h4>
                </div>
                <div class="col-lg-6 d-flex align-items-center justify-content-center">
                    <a href="" class="btn btn-custom text-white">Subscribe</a>
                </div>
                
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- WOW.js for triggering animations on scroll -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>

</body>
</html>
