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

    <link rel="stylesheet" href="https://cdn.plyr.io/3.6.8/plyr.css" />
    <script src="https://cdn.plyr.io/3.6.8/plyr.polyfilled.js"></script>

    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/digital.css">
</head>
<body class="bg-digital">
    <?php include 'digital-navbar.php'; ?>

    <!-- About Us Section -->
    <section id="sg-hero" class="sg-hero bg-digital py-5">
        <div class="container custom-container">
            <div class="row align-items-center">
                <div class="col-lg-7 wow animate__animated animate__fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
                    <h2 class="sg-hero-title">Creative Digital Marketing Agency</h2>
                    <p class="sg-hero-text">
                        We are a dynamic team of creatives and technologists dedicated to crafting innovative digital solutions. Our expertise in design and technology allows us to transform ideas into exceptional user experiences, helping businesses grow and thrive in an ever-evolving digital landscape. We are a dynamic team of creatives.
                    </p>
                    <div class="row align-items-center">
                        <div class="col-lg-3">
                            <button class="btn btn-custom">Schedule Call</button>
                        </div>
                        <div class="col-lg-3">
                            <a href="" class="custom-link">View Case Study</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 wow animate__animated animate__fadeInRight" data-wow-duration="1s" data-wow-delay="0.4s">
                    <img src="assets/images/digital/hero.png" alt="Team Meeting" class="sg-hero-img img-fluid rounded">
                </div>
            </div>
        </div>
    </section>

<section class="bg-digital py-5">
    <div class="container custom-container">
        <div class="row">
            <div class="col-lg-6 text-start"> <!-- Left-aligned column -->
                <h2>Provide the best service with<br> out of the box ideas</h2>
            </div>
            <div class="col-lg-6 text-end"> <!-- Right-aligned column -->
                <p>
                    We are a passionate team of digital marketing enthusiasts dedicated to helping businesses succeed in the digital world. With years of experience and a deep understanding of the ever-evolving online landscape, we stay at the forefront of industry trends and technologies.
                </p>
            </div>
        </div>
        <div class="row align-items-center justify-content-center">
            <div class="col-md-12 wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                <div class="video-wrapper1">
                    <div class="video-thumbnail" id="videoThumbnail">
                        <img src="assets/images/digital/thumbnail.png" alt="Video Thumbnail" class="thumbnail-img">
                        <div class="video-overlay" id="videoOverlay">
                            <button class="play-button" id="playButton">▶</button>
                        </div>
                    </div>
                    <video class="stat-video1 rounded" id="player" controls crossorigin playsinline style="display: none;">
                        <source src="assets/images/video/sankhara-tech.mp4" type="video/mp4" />
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal for Video -->
<div class="modal" id="videoModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <video class="stat-video1 rounded" id="modalPlayer" controls crossorigin playsinline>
                    <source src="assets/images/video/sh-home.mp4" type="video/mp4" />
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </div>
</div>












    <section class="expertise-section bg-digital py-5">
    <div class="container custom-container">
        
        <div class="row g-4">
            <!-- Card 1 -->
            <div class="col-md-4">
                <div class="expertise-card">
                    <i class="expertise-icon fa fa-share-alt"></i> <!-- Social Media Marketing Icon -->
                    <h5>Social Media Marketing</h5>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-4">
                <div class="expertise-card">
                    <i class="expertise-icon fa fa-search"></i> <!-- SEO Icon -->
                    <h5>Search engine optimization (SEO)</h5>
                </div>
            </div>

            <div class="col-lg-4">
                <h2 class="text-white">Our Digital Marketing Expertise</h2>
                <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed diam nonumy eirmod tempor Lorem ipsum dolor sit.</p>
            </div>

            <!-- Card 3 -->
            <div class="col-md-4">
                <div class="expertise-card">
                    <i class="expertise-icon fa fa-funnel-dollar"></i> <!-- Performance Marketing Icon -->
                    <h5>Performance Marketing</h5>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-md-4">
                <div class="expertise-card">
                    <i class="expertise-icon fa fa-pen-nib"></i> <!-- Content Writing Icon -->
                    <h5>Content Writing</h5>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="col-md-4">
                <div class="expertise-card">
                    <i class="expertise-icon fa fa-code"></i> <!-- Website Development Icon -->
                    <h5>Website Development</h5>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="col-md-4">
                <div class="expertise-card">
                    <i class="expertise-icon fa fa-video"></i> <!-- Video Editing Icon -->
                    <h5>Video Editing</h5>
                </div>
            </div>

            <!-- Card 7 -->
            <div class="col-md-4">
                <div class="expertise-card">
                    <i class="expertise-icon fa fa-shopping-cart"></i> <!-- E-commerce Ads Icon -->
                    <h5>E-commerce Ads</h5>
                </div>
            </div>

            <!-- Card 8 -->
            <div class="col-md-4">
                <div class="expertise-card">
                    <i class="expertise-icon fa fa-users"></i> <!-- Influence Marketing Icon -->
                    <h5>Influence Marketing</h5>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="portfolio bg-digital">
    <div class="container custom-container">
        <div class="row">
            <div class="col-md-6 d-flex flex-column justify-content-start text-white p-4 position-relative">
                <div class="portfolio-shape"></div> <!-- Optional shape -->
                <div class="section-heading">Our Portfolio</div>
                <h3>Here's A Glimpse of<br><span>Our Works!</span></h3>
                <div class="statistics mt-3">
                    <p><i class="fas fa-check-circle"></i> <strong>100+</strong> Projects Completed</p>
                    <p><i class="fas fa-smile"></i> <strong>50+</strong> Happy Clients</p>
                </div>
                <blockquote class="blockquote mt-3">
                    <p>"Amazing work! Truly transformed our brand." - <em>Client Name</em></p>
                </blockquote>
                <a href="contact" class="btn text-white btn-custom mt-3">Get in Touch</a>
            </div>

            <div class="col-md-6 d-flex align-items-center">
                <div class="owl-carousel owl-carousel-portfolio owl-theme">
                    <div class="item"><img alt="creative" src="assets/images/about/team.png" class="img-fluid"></div>
                    <div class="item"><img alt="creative" src="assets/images/about/team.png" class="img-fluid"></div>
                    <div class="item"><img alt="creative" src="assets/images/about/team.png" class="img-fluid"></div>
                    <div class="item"><img alt="creative" src="assets/images/about/team.png" class="img-fluid"></div>
                    <div class="item"><img alt="creative" src="assets/images/about/team.png" class="img-fluid"></div>
                    <div class="item"><img alt="creative" src="assets/images/about/team.png" class="img-fluid"></div>
                    <div class="item"><img alt="creative" src="assets/images/about/team.png" class="img-fluid"></div>
                    <div class="item"><img alt="creative" src="assets/images/about/team.png" class="img-fluid"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ====== Our Clients Section Start ====== -->
<section id="our-clients" class="py-5 bg-digital">
  <div class="container custom-container">
    <div class="row">
      <div class="col-lg-12">
        <div class="mx-auto pb-4">
          <h2 class="section-title text-white">Our Esteemed Clients</h2>
        </div>
      </div>
    </div>

    <div class="row">
  <div class="owl-carousel our-clients-carousel owl-theme">
    <!-- Client Image 1 -->
    <div class="client-item">
      <img src="assets/images/clients/1.png" alt="Client 1" class="client-logo" loading="lazy" />
    </div>
    <!-- Client Image 2 -->
    <div class="client-item">
      <img src="assets/images/clients/2.png" alt="Client 2" class="client-logo" loading="lazy" />
    </div>
    <!-- Client Image 3 -->
    <div class="client-item">
      <img src="assets/images/clients/3.png" alt="Client 3" class="client-logo" loading="lazy" />
    </div>
    <!-- Client Image 4 -->
    <div class="client-item">
      <img src="assets/images/clients/4.png" alt="Client 4" class="client-logo" loading="lazy" />
    </div>
    <!-- Client Image 5 -->
    <div class="client-item">
      <img src="assets/images/clients/5.png" alt="Client 5" class="client-logo" loading="lazy" />
    </div>
    <!-- Client Image 6 -->
    <div class="client-item">
      <img src="assets/images/clients/6.png" alt="Client 6" class="client-logo" loading="lazy" />
    </div>
    
  </div>
</div>

  </div>
</section>
<!-- ====== Our Clients Section End ====== -->

<section class="testimonials-section py-5">
    <div class="container custom-container py-5" style="background-color: #131313;">
        <h2 class="mb-3 px-4 text-white">Testimonials</h2>
        <div class="owl-carousel owl-carousel-testimonials owl-theme">
            <div class="item">
                <div class="testimonial-card p-4 text-white">
                    <div class="d-flex align-items-center mb-3">
                        <img src="assets/images/testi/1.png" alt="User Image" class="user-image me-3">
                        <div class="text-start">
                            <h5 class="mb-0">Zoe Mantis</h5>
                            <p class="mb-0">Founder, Alpha Group</p>
                        </div>
                    </div>
                    <p class="testimonial-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed diam nonumy eirmod.</p>
                </div>
            </div>
            <div class="item">
                <div class="testimonial-card p-4 text-white">
                    <div class="d-flex align-items-center mb-3">
                        <img src="https://via.placeholder.com/50" alt="User Image" class="user-image me-3">
                        <div class="text-start">
                            <h5 class="mb-0">Don Joe</h5>
                            <p class="mb-0">Founder, Alpha Group</p>
                        </div>
                    </div>
                    <p class="testimonial-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed diam nonumy eirmod.</p>
                </div>
            </div>
            <div class="item">
                <div class="testimonial-card p-4 text-white">
                    <div class="d-flex align-items-center mb-3">
                        <img src="https://via.placeholder.com/50" alt="User Image" class="user-image me-3">
                        <div class="text-start">
                            <h5 class="mb-0">Zoe Mantis</h5>
                            <p class="mb-0">Founder, Alpha Group</p>
                        </div>
                    </div>
                    <p class="testimonial-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed diam nonumy eirmod.</p>
                </div>
            </div>
        </div>
    </div>
</section>



    <section class="team-section bg-digital py-5">
        <div class="container custom-container">
            <div class="row team-bg align-items-center position-relative text-custom" style="background-color: #EBEFEB;">
                <!-- Left content -->
                <div class="col-lg-7 wow animate__animated animate__fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                    <h2>We believe in being early adopters of new tech, innovating without boundaries, and contributing actively to the open-source community.</h2>
                    <a href="#" class="btn-green mt-5">Meet our team <i class="fas fa-arrow-right"></i></a>
                </div>
                <!-- Right content (Image) -->
                <div class="col-lg-5 our-team-right position-relative wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
                    <h2><i>Our team!</i></h2>
                    <img src="assets/images/about/team.png" class="team-image" alt="Team meeting">
                </div>
            </div>
        </div>
    </section>

    <section id="call-to-action" class="gradient-background py-5">
        <div class="container custom-container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="col-md-6 text-center wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                    <h3 class="text-white px-5">What's Stopping You? Let's build your dream together</h3>
                    <!-- <p>Lorem Ipsum Statement</p> -->
                    <a href="#" class="btn btn-custom text-white wow animate__animated animate__fadeInUp" data-wow-delay="0.5s">Schedule Call</a>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- Plyr JS (if used) -->
<script src="https://cdn.plyr.io/3.6.8/plyr.polyfilled.js"></script>

<!-- Owl Carousel JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <!-- WOW.js for triggering animations on scroll -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>

    <script>
    $(document).ready(function(){
         $(".our-clients-carousel").owlCarousel({
      items: 6,
      loop: true,
      margin: 10,
      autoplay: true,
      responsiveClass: true,
      responsive: {
        0: { items: 2 },
        600: { items: 4 },
        1000: { items: 6 } // Display 6 items on larger screens
      }
    });


        $(".owl-carousel-portfolio").owlCarousel({
            items: 1, // Number of items visible at once
            loop: true,
            autoplay: true,
            autoplayTimeout: 3000, // Time in ms between transitions
            autoplayHoverPause: true, // Pause on hover
            margin: 10, // Space between items
            responsive: {
                0: {
                    items: 1 // For mobile screens
                },
                768: {
                    items: 2 // For tablets
                },
                992: {
                    items: 1 // For larger screens
                }
            }
        });

         $(".owl-carousel-testimonials").owlCarousel({
            items: 3, // Number of items visible at once
            loop: true,
            autoplay: true,
            autoplayTimeout: 3000, // Time in ms between transitions
            autoplayHoverPause: true, // Pause on hover
            margin: 10, // Space between items
            responsive: {
                0: {
                    items: 1 // For mobile screens
                },
                768: {
                    items: 2 // For tablets
                },
                992: {
                    items: 3 // For larger screens
                }
            }
        });


    });
</script>
<script type="text/javascript">
// Initialize Plyr for the video player
const player = new Plyr('#modalPlayer');

// Add click event to the play button
document.getElementById('playButton').addEventListener('click', function() {
    // Hide the thumbnail and overlay
    document.getElementById('videoThumbnail').style.display = 'none';

    // Show the modal
    $('#videoModal').modal('show'); // Show the modal

    // Start playing the video
    player.play(); // Start playing the video

    // Optional: Add an event listener to hide the modal when the video ends
    player.on('ended', function() {
        $('#videoModal').modal('hide'); // Hide the modal when the video ends
        document.getElementById('videoThumbnail').style.display = 'block'; // Show the thumbnail again
    });
});

// Add an event listener to pause the video when the modal is closed
$('#videoModal').on('hidden.bs.modal', function () {
    player.pause(); // Pause the video when the modal is closed
    player.currentTime = 0; // Reset video to the beginning
    document.getElementById('videoThumbnail').style.display = 'block'; // Show the thumbnail again
});

// Add click event for the close button
document.querySelector('.close').addEventListener('click', function() {
    player.pause(); // Pause the video when closing
    player.currentTime = 0; // Reset video to the beginning
    $('#videoModal').modal('hide'); // Hide the modal
});
</script>




</body>
</html>
