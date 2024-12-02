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
                <div class="col-lg-9 wow animate__animated animate__fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
                    <p class="sg-about-tagline">Collaborate | Empower | Grow</p>
                    <h2 class="sg-about-title">Contact Us</h2>
                </div>
                <div class="col-lg-3 wow animate__animated animate__fadeInRight" data-wow-duration="1s" data-wow-delay="0.4s">
                    <h4 style="float: right;">sankharagroup  
                        <a href="#" class="me-2"><i class="fab fa-facebook" style="color: #000;"></i></a>
                    </h4>
                    <h4 style="float: right;">sankharagroup  
                        <a href="#" class="me-2"><i class="fab fa-instagram" style="color: #000;"></i></a>
                    </h4>
                    <h4 style="float: right;">sankharagroup  
                        <a href="#" class="me-2"><i class="fab fa-twitter" style="color: #000;"></i></a>
                    </h4>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Mission Section -->
    <section class="py-5 bg-light contact-form-section">
    <div class="container wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-12">
                <img src="assets/images/about/mission.png" alt="Wind Farm" class="img-fluid rounded">
            </div>
        </div>
        <div class="row align-items-center justify-content-center contact-form-row">
            <div class="col-lg-10">
                <div class="card rounded shadow-sm">
                    <div class="container mt-3">
                        <div class="row justify-content-center">
                            <div class="col-md-12 py-3">
                                <form>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="mb-3">
                                                <label for="name" class="form-label">Name</label>
                                                <input type="text" class="form-control" id="name" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Email address</label>
                                                <input type="email" class="form-control" id="email" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="mb-3">
                                                <label for="phone" class="form-label">Phone number</label>
                                                <input type="tel" class="form-control" id="phone" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label for="message" class="form-label">Message</label>
                                                <textarea class="form-control" id="message" rows="3" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


    <!-- Blog Section -->
    <section class="blog mt-5 mb-3">
    <div class="container wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
        <div class="blog-section-title">
            <h4 class="bg-light p-1">Blogs that make unleashing Impact.</h4>
        </div>
        <div class="owl-carousel owl-carousel-blog owl-theme">
            <div class="item blog-card p-1 bg-light d-flex flex-column align-items-center justify-content-center">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 d-flex align-items-center justify-content-center">
                        <img src="assets/images/blog/1.png" alt="Sankhara Support Icon" class="img-fluid p-2">
                    </div>
                    <div class="col-lg-6 align-items-center justify-content-center">
                        <h3 class="p-4">Tech news delivering insights, trends, and breakthroughs to keep you informed and inspired.</h3>
                    </div>
                </div>
            </div>
            
            <!-- Repeat similar blocks for additional blog entries -->
        </div>
    </div>
</section>

    <?php include 'footer.php'; ?>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- Owl Carousel JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <!-- WOW.js for triggering animations on scroll -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script>
        // Initialize WOW.js
        new WOW().init();
    </script>

    <script>
    $(document).ready(function(){
        
        

        // Initialize Blog Carousel
        $('.owl-carousel-blog').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            dots: true,
            autoplay: true,
            autoplayTimeout: 5000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1 // 1 item for small screens
                },
                600: {
                    items: 2 // 2 items for medium screens
                },
                1000: {
                    items: 1 // 3 items for large screens
                }
            }
        });
    });
</script>
</body>
</html>
