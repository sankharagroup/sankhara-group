<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us - Animation Example</title>
  
  <!-- Animate.css for animations -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
  
  <!-- Bootstrap 5 CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
  
  <!-- Custom CSS -->
  <style>
    .sg-about {
      background-color: #f8f9fa;
    }
    .sg-about-title {
      font-size: 2.5rem;
      font-weight: 700;
    }
    .sg-about-text {
      font-size: 1.1rem;
      color: #637381;
    }
    .stat-box {
      padding: 30px;
      background-color: #fff;
      box-shadow: 0px 4px 10px rgba(0,0,0,0.1);
      margin-bottom: 20px;
    }
    .stat-number {
      font-size: 2.5rem;
      color: #023d6b;
    }
    .btn-outline-success {
      font-size: 1.2rem;
      padding: 10px 20px;
    }
  </style>
</head>
<body>

  <!-- About Us Section -->
  <section id="sg-about" class="sg-about py-5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-7 wow animate__fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.3s">
          <p class="sg-about-tagline">Collaborate | Empower | Grow</p>
          <h2 class="sg-about-title">About us</h2>
          <p class="sg-about-text">
            We are a dynamic team of creatives and technologists dedicated to crafting innovative digital solutions that empower businesses and individuals alike. With a passion for technology and a commitment to excellence, we help our clients navigate the digital landscape with confidence.
          </p>
        </div>
        <div class="col-lg-5 wow animate__fadeInRight" data-wow-duration="1.5s" data-wow-delay="0.5s">
          <img src="assets/images/about/hero.png" alt="Team Meeting" class="sg-about-img img-fluid rounded">
        </div>
      </div>
    </div>
  </section>

  <!-- Statistics Section -->
  <section id="statistics" class="bg-light py-5 wow animate__zoomIn" data-wow-duration="2s">
    <div class="container">
      <div class="row text-center">
        <div class="col-md-3 wow animate__fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="stat-box">
            <h2 class="stat-number">99%</h2>
            <p>Data Accuracy</p>
          </div>
        </div>
        <div class="col-md-3 wow animate__fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
          <div class="stat-box">
            <h2 class="stat-number">233+</h2>
            <p>Projects Done</p>
          </div>
        </div>
        <div class="col-md-3 wow animate__fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
          <div class="stat-box">
            <h2 class="stat-number">12K+</h2>
            <p>Happy Clients</p>
          </div>
        </div>
        <div class="col-md-3 wow animate__fadeInUp" data-wow-duration="1s" data-wow-delay="0.9s">
          <div class="stat-box">
            <h2 class="stat-number">17+</h2>
            <p>Products</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Join Our Team Section -->
  <section id="join-team" class="py-5 wow animate__fadeIn" data-wow-duration="2s">
    <div class="container">
      <div class="row bg-light wow animate__fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.5s">
        <h4 class="py-2" align="left">Join Our Team</h4>
      </div>
      <div class="row align-items-center">
        <div class="col-lg-6 wow animate__fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.7s">
          <h2>Redefine the future through ethical innovation.</h2>
        </div>
        <div class="col-lg-6 wow animate__fadeInRight" data-wow-duration="1.5s" data-wow-delay="0.9s">
          <p align="right">We envision a future reshaped by ethical innovation and commitment to progress.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Call to Action Section -->
  <section id="call-to-action" class="bg-primary text-white py-5 wow animate__bounceIn" data-wow-duration="2s" data-wow-delay="1s">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center wow animate__pulse" data-wow-duration="1.5s" data-wow-delay="0.3s">
          <h2>Let's Build Your Dream Together</h2>
          <p class="mb-4">Your success is our priority. Let's collaborate and bring your vision to life.</p>
          <a href="#" class="btn btn-outline-success wow animate__jello" data-wow-delay="0.5s">Let's Connect</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Bootstrap 5 JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- WOW.js for triggering animations on scroll -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
  <script>
    new WOW().init();
  </script>

</body>
</html>
