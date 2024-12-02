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
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 wow animate__animated animate__fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
                    <p class="sg-about-tagline">Sankhara Careers</p>
                    <h2 class="sg-about-title">Sankara Careers Launches Innovative AI Tool for Enhanced Data Analysis</h2>
                </div>
                <div class="col-lg-6 wow animate__animated animate__fadeInRight" data-wow-duration="1s" data-wow-delay="0.4s">
                    <p>Lorem ipsum dolor sit amet consectetur. Ac sed viverra at enim auctor consectetur. Tortor tellus adipiscing aliquet nisi eget id porta. Vel non elementum ipsum vulputate. Vitae metus eget pellentesque integer diam massa lacus phasellus. Habitasse convallis suspendisse cursus sit lobortis vitae sit sit amet. Bibendum tempus eget vel eleifend at. Purus sed sagittis diam habitasse. Consequat in netus vulputate tincidunt elit eget pellentesque. Eu eget maecenas posuere eget nunc tortor faucibus varius. Mauris semper nullam arcu id mauris netus lobortis laoreet. Tellus urna tempor lacus sed eget viverra aliquam amet. Tortor gravida libero odio erat eu suscipit faucibus arcu donec. In est elementum sagittis vel massa duis. Nullam gravida sed pharetra egestas cursus nullam quam.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="bg-white py-5">
        <div class="container">
            <div class="row text-center statistics-row1">
                <div class="col-md-3 wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                    <div class="stat-box1">
                        <h4 align="left">Website is work in progress</h4>
                        <p class="text-light" align="left">project finish with superbly</p>
                    </div>
                </div>
                <div class="col-md-9 wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                    <div class="video-wrapper1">
                        <video class="stat-video1 rounded" muted autoplay>
                            <source src="assets/images/video/sankhara-tech.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <p class="video-description">Watch to learn more about our data accuracy.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5" style="background: linear-gradient(180deg, rgba(54, 94, 50, 0.1) 0%, rgba(113, 196, 104, 0) 100%);">
        <div class="container py-3">
            <div class="row">
                <div class="col-md-12 text-center wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                    <h2>Let's Build Your Dream Together</h2>
                    <p>Lorem Ipsum Statement</p>
                    <a href="#" class="btn btn-outline-success wow animate__animated animate__fadeInUp" data-wow-delay="0.5s">Let's Connect</a>
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
