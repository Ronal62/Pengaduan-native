<?php include 'header1.php'; ?>
<!-- Navbar Start -->
<div class="container-fluid bg-white sticky-top">
  <div class="container">
    <nav class="navbar navbar-expand-lg bg-white navbar-light p-lg-0">
      <a href="index.html" class="navbar-brand d-lg-none">
        <h1 class="fw-bold m-0">GrowMark</h1>
      </a>
      <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav">
          <a href="index.php" class="nav-item nav-link">Home</a>
          <a href="about.php" class="nav-item nav-link active">About</a>
          <a href="service.html" class="nav-item nav-link">Services</a>
          <a href="project.html" class="nav-item nav-link">Projects</a>
          <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
            <div class="dropdown-menu bg-light rounded-0 rounded-bottom m-0">
              <a href="feature.html" class="dropdown-item">Features</a>
              <a href="team.html" class="dropdown-item">Our Team</a>
              <a href="testimonial.html" class="dropdown-item">Testimonial</a>
              <a href="quote.html" class="dropdown-item">Quotation</a>
              <a href="404.html" class="dropdown-item">404 Page</a>
            </div>
          </div>
          <a href="contact.html" class="nav-item nav-link">Contact</a>
        </div>
        <div class="ms-auto d-none d-lg-block">
          <a href="" class="btn btn-primary rounded-pill py-2 px-3">Get A Quote</a>
        </div>
      </div>
    </nav>
  </div>
</div>
<!-- Navbar End -->

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
  <div class="container text-center py-5">
    <h1 class="display-2 text-white mb-4 animated slideInDown">About Us</h1>
    <nav aria-label="breadcrumb animated slideInDown">
      <ol class="breadcrumb justify-content-center mb-0">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Pages</a></li>
        <li class="breadcrumb-item text-primary" aria-current="page">
          About
        </li>
      </ol>
    </nav>
  </div>
</div>
<!-- Page Header End -->

<!-- About Start -->
<div class="container-xxl about mb-5" style="margin-top: 6rem">
  <div class="container">
    <div class="row g-0">
      <div class="col-lg-6">
        <div class="h-100 d-flex align-items-center justify-content-center" style="min-height: 300px">
          <button type="button" class="btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
            <span></span>
          </button>
        </div>
      </div>
      <div class="col-lg-6 pt-lg-5 wow fadeIn" data-wow-delay="0.5s">
        <div class="bg-white rounded-top p-5 mt-lg-5">
          <p class="fs-5 fw-medium text-primary">About Us</p>
          <h1 class="display-6 mb-4">
            The Best Marketing Agency to Improve Your Business
          </h1>
          <p class="mb-4">
            Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit.
            Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit,
            sed stet lorem sit clita duo justo
          </p>
          <div class="row g-5 pt-2 mb-5">
            <div class="col-sm-6">
              <img class="img-fluid mb-4" src="img/icon/icon-5.png" alt="" />
              <h5 class="mb-3">Managed Services</h5>
              <span>Clita erat ipsum et lorem et sit sed stet lorem</span>
            </div>
            <div class="col-sm-6">
              <img class="img-fluid mb-4" src="img/icon/icon-2.png" alt="" />
              <h5 class="mb-3">Dedicated Experts</h5>
              <span>Clita erat ipsum et lorem et sit sed stet lorem</span>
            </div>
          </div>
          <a class="btn btn-primary rounded-pill py-3 px-5" href="">Explore More</a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- About End -->

<!-- Video Modal Start -->
<div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content rounded-0">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Youtube Video</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- 16:9 aspect ratio -->
        <div class="ratio ratio-16x9">
          <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always" allow="autoplay"></iframe>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Video Modal End -->

<!-- Team Start -->
<div class="container-xxl py-5">
  <div class="container">
    <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px">
      <p class="fs-5 fw-medium text-primary">Our Team</p>
      <h1 class="display-5 mb-5">Our Expert People Ready to Help You</h1>
    </div>
    <div class="row g-4">
      <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="team-item rounded overflow-hidden pb-4">
          <img class="img-fluid mb-4" src="img/team-1.jpg" alt="" />
          <h5>Alex Robin</h5>
          <span class="text-primary">Founder & CEO</span>
          <ul class="team-social">
            <li>
              <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
            </li>
            <li>
              <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
            </li>
            <li>
              <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
            </li>
            <li>
              <a class="btn btn-square" href=""><i class="fab fa-linkedin-in"></i></a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
        <div class="team-item rounded overflow-hidden pb-4">
          <img class="img-fluid mb-4" src="img/team-2.jpg" alt="" />
          <h5>Adam Crew</h5>
          <span class="text-primary">Co Founder</span>
          <ul class="team-social">
            <li>
              <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
            </li>
            <li>
              <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
            </li>
            <li>
              <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
            </li>
            <li>
              <a class="btn btn-square" href=""><i class="fab fa-linkedin-in"></i></a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
        <div class="team-item rounded overflow-hidden pb-4">
          <img class="img-fluid mb-4" src="img/team-3.jpg" alt="" />
          <h5>Boris Johnson</h5>
          <span class="text-primary">Executive Manager</span>
          <ul class="team-social">
            <li>
              <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
            </li>
            <li>
              <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
            </li>
            <li>
              <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
            </li>
            <li>
              <a class="btn btn-square" href=""><i class="fab fa-linkedin-in"></i></a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
        <div class="team-item rounded overflow-hidden pb-4">
          <img class="img-fluid mb-4" src="img/team-4.jpg" alt="" />
          <h5>Robert Jordan</h5>
          <span class="text-primary">Digital Marketer</span>
          <ul class="team-social">
            <li>
              <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
            </li>
            <li>
              <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
            </li>
            <li>
              <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
            </li>
            <li>
              <a class="btn btn-square" href=""><i class="fab fa-linkedin-in"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Team End -->

<!-- Footer Start -->
<div class="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
  <div class="container py-5">
    <div class="row g-5">
      <div class="col-lg-3 col-md-6">
        <h4 class="text-white mb-4">Our Office</h4>
        <p class="mb-2">
          <i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA
        </p>
        <p class="mb-2">
          <i class="fa fa-phone-alt me-3"></i>+012 345 67890
        </p>
        <p class="mb-2">
          <i class="fa fa-envelope me-3"></i>info@example.com
        </p>
        <div class="d-flex pt-3">
          <a class="btn btn-square btn-light rounded-circle me-2" href=""><i class="fab fa-twitter"></i></a>
          <a class="btn btn-square btn-light rounded-circle me-2" href=""><i class="fab fa-facebook-f"></i></a>
          <a class="btn btn-square btn-light rounded-circle me-2" href=""><i class="fab fa-youtube"></i></a>
          <a class="btn btn-square btn-light rounded-circle me-2" href=""><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <h4 class="text-white mb-4">Quick Links</h4>
        <a class="btn btn-link" href="">About Us</a>
        <a class="btn btn-link" href="">Contact Us</a>
        <a class="btn btn-link" href="">Our Services</a>
        <a class="btn btn-link" href="">Terms & Condition</a>
        <a class="btn btn-link" href="">Support</a>
      </div>
      <div class="col-lg-3 col-md-6">
        <h4 class="text-white mb-4">Business Hours</h4>
        <p class="mb-1">Monday - Friday</p>
        <h6 class="text-light">09:00 am - 07:00 pm</h6>
        <p class="mb-1">Saturday</p>
        <h6 class="text-light">09:00 am - 12:00 pm</h6>
        <p class="mb-1">Sunday</p>
        <h6 class="text-light">Closed</h6>
      </div>
      <div class="col-lg-3 col-md-6">
        <h4 class="text-white mb-4">Newsletter</h4>
        <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
        <div class="position-relative w-100">
          <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email" />
          <button type="button" class="btn btn-light py-2 position-absolute top-0 end-0 mt-2 me-2">
            SignUp
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Footer End -->

<!-- Copyright Start -->
<div class="container-fluid copyright py-4">
  <div class="container">
    <div class="row">
      <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
        &copy; <a class="fw-medium text-light" href="#">Your Site Name</a>,
        All Right Reserved.
      </div>
      <div class="col-md-6 text-center text-md-end">
        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
        Designed By
        <a class="fw-medium text-light" href="https://htmlcodex.com">HTML Codex</a>
        Distributed By
        <a class="fw-medium text-light" href="https://themewagon.com">ThemeWagon</a>
      </div>
    </div>
  </div>
</div>
<!-- Copyright End -->

<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>

<!-- JavaScript Libraries -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/lightbox/js/lightbox.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
</body>

</html>