<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Othaya NG CDF BURSARY MANAGEMENT SYSTEM</title>
  <meta content="" name="description">
  <meta content="" name="keywords">


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="objects/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="objects/vendor/aos/aos.css" rel="stylesheet">
  <link href="objects/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="objects/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="objects/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="objects/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="objects/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>



  <!-- START INLINE CSS -->

<style>
  
body {
  font-family: "Open Sans", sans-serif;
  color: lightseagreen;
}

a {
  color: #4fa6d5;
  text-decoration: none;
}

a:hover {
  color: #45beff;
  text-decoration: none;
}

h1,
h2,
h3,
h4,
h5,
h6,
.font-primary {
  font-family: "Roboto", sans-serif;
}

/*--------------------------------------------------------------
# Back to top button
--------------------------------------------------------------*/
.back-to-top {
  position: fixed;
  visibility: hidden;
  opacity: 0;
  right: 15px;
  bottom: 15px;
  z-index: 99999;
  background: lightseagreen;
  width: 40px;
  height: 40px;
  border-radius: 4px;
  transition: all 0.4s;
}

.back-to-top i {
  font-size: 24px;
  color: #fff;
  line-height: 0;
}

.back-to-top:hover {
  background: #85b6cf;
  color: lightseagreen;
}

.back-to-top.active {
  visibility: visible;
  opacity: 1;
}

/*--------------------------------------------------------------
# Header
--------------------------------------------------------------*/
#header {
  height: 80px;
  transition: all 0.5s;
  z-index: 997;
  transition: all 0.5s;
  background: #1e4356;
}

#header.header-transparent {
  background: none;
}

#header.header-scrolled {
  background: rgba(30, 67, 86, 0.8);
  height: 60px;
}

#header .logo h1 {
  font-size: 28px;
  margin: 0;
  padding: 4px 0;
  line-height: 1;
  font-weight: 400;
  letter-spacing: 3px;
  text-transform: uppercase;
}

#header .logo h1 a,
#header .logo h1 a:hover {
  color: #fff;
  text-decoration: none;
}

#header .logo img {
  padding: 0;
  margin: 0;
  max-height: 40px;
}

#main {
  margin-top: 80px;
}

/*--------------------------------------------------------------
# Navigation Menu
--------------------------------------------------------------*/
/**
* Desktop Navigation 
*/
.navbar {
  padding: 0;
}

.navbar ul {
  margin: 0;
  padding: 0;
  display: flex;
  list-style: none;
  align-items: center;
}

.navbar li {
  position: relative;
}

.navbar a,
.navbar a:focus {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 10px 0 10px 30px;
  font-family: "Open Sans", sans-serif;
  font-size: 14px;
  color: #fff;
  white-space: nowrap;
  transition: 0.3s;
}

.navbar a i,
.navbar a:focus i {
  font-size: 12px;
  line-height: 0;
  margin-left: 5px;
}

.navbar a:hover,
.navbar .active,
.navbar .active:focus,
.navbar li:hover>a {
  color: #a2cce3;
}

.navbar .dropdown ul {
  display: block;
  position: absolute;
  left: 14px;
  top: calc(100% + 30px);
  margin: 0;
  padding: 10px 0;
  z-index: 99;
  opacity: 0;
  visibility: hidden;
  background: #fff;
  box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
  transition: 0.3s;
}

.navbar .dropdown ul li {
  min-width: 200px;
}

.navbar .dropdown ul a {
  padding: 10px 20px;
  font-size: 14px;
  text-transform: none;
  color: #1c3745;
}

.navbar .dropdown ul a i {
  font-size: 12px;
}

.navbar .dropdown ul a:hover,
.navbar .dropdown ul .active:hover,
.navbar .dropdown ul li:hover>a {
  color: #68A4C4;
}

.navbar .dropdown:hover>ul {
  opacity: 1;
  top: 100%;
  visibility: visible;
}

.navbar .dropdown .dropdown ul {
  top: 0;
  left: calc(100% - 30px);
  visibility: hidden;
}

.navbar .dropdown .dropdown:hover>ul {
  opacity: 1;
  top: 0;
  left: 100%;
  visibility: visible;
}

@media (max-width: 1366px) {
  .navbar .dropdown .dropdown ul {
    left: -90%;
  }

  .navbar .dropdown .dropdown:hover>ul {
    left: -100%;
  }
}

/**
* Mobile Navigation 
*/
.mobile-nav-toggle {
  color: #fff;
  font-size: 28px;
  cursor: pointer;
  display: none;
  line-height: 0;
  transition: 0.5s;
}

@media (max-width: 991px) {
  .mobile-nav-toggle {
    display: block;
  }

  .navbar ul {
    display: none;
  }
}

.navbar-mobile {
  position: fixed;
  overflow: hidden;
  top: 0;
  right: 0;
  left: 0;
  bottom: 0;
  background: rgba(17, 38, 48, 0.9);
  transition: 0.3s;
}

.navbar-mobile .mobile-nav-toggle {
  position: absolute;
  top: 15px;
  right: 15px;
}

.navbar-mobile ul {
  display: block;
  position: absolute;
  top: 55px;
  right: 15px;
  bottom: 15px;
  left: 15px;
  padding: 10px 0;
  background-color: #fff;
  overflow-y: auto;
  transition: 0.3s;
}

.navbar-mobile a,
.navbar-mobile a:focus {
  padding: 10px 20px;
  font-size: 15px;
  color: #1e4356;
}

.navbar-mobile a:hover,
.navbar-mobile .active,
.navbar-mobile li:hover>a {
  color: #68A4C4;
}

.navbar-mobile .getstarted,
.navbar-mobile .getstarted:focus {
  margin: 15px;
}

.navbar-mobile .dropdown ul {
  position: static;
  display: none;
  margin: 10px 20px;
  padding: 10px 0;
  z-index: 99;
  opacity: 1;
  visibility: visible;
  background: #fff;
  box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
}

.navbar-mobile .dropdown ul li {
  min-width: 200px;
}

.navbar-mobile .dropdown ul a {
  padding: 10px 20px;
}

.navbar-mobile .dropdown ul a i {
  font-size: 12px;
}

.navbar-mobile .dropdown ul a:hover,
.navbar-mobile .dropdown ul .active:hover,
.navbar-mobile .dropdown ul li:hover>a {
  color: #68A4C4;
}

.navbar-mobile .dropdown>.dropdown-active {
  display: block;
}

/*--------------------------------------------------------------
# Hero Section
--------------------------------------------------------------*/
#hero {
  width: 100%;
  height: 90vh;
  overflow: hidden;
  position: relative;
}

#hero::after {
  content: "";
  position: absolute;
  left: 50%;
  top: 0;
  width: 130%;
  height: 95%;
  background: linear-gradient(to right, rgba(30, 67, 86, 0.8), rgba(30, 67, 86, 0.6)), url("img/cdf.png") center repeat;
  z-index: 0;
  border-radius: 0 0 50% 50%;
  transform: translateX(-50%) rotate(0deg);
}

#hero::before {
  content: "";
  position: absolute;
  left: 50%;
  top: 0;
  width: 130%;
  height: 96%;
  background: #68A4C4;
  opacity: 0.3;
  z-index: 0;
  border-radius: 0 0 50% 50%;
  transform: translateX(-50%) translateY(18px) rotate(2deg);
}

#hero .carousel-container {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  text-align: center;
  bottom: 0;
  top: 0;
  left: 0;
  right: 0;
}

#hero h2 {
  color: #fff;
  margin-bottom: 30px;
  font-size: 48px;
  font-weight: 700;
}

#hero p {
  width: 80%;
  -webkit-animation-delay: 0.4s;
  animation-delay: 0.4s;
  margin: 0 auto 30px auto;
  color: #fff;
}

#hero .carousel-control-prev,
#hero .carousel-control-next {
  width: 10%;
}

#hero .carousel-control-next-icon,
#hero .carousel-control-prev-icon {
  background: none;
  font-size: 48px;
  line-height: 1;
  width: auto;
  height: auto;
}


@media (min-width: 1024px) {
  #hero p {
    width: 60%;
  }

  #hero .carousel-control-prev,
  #hero .carousel-control-next {
    width: 5%;
  }
}

@media (max-width: 768px) {
  #hero::after {
    width: 180%;
    height: 95%;
    border-radius: 0 0 50% 50%;
    transform: translateX(-50%) rotate(0deg);
  }

  #hero::before {
    top: 0;
    width: 180%;
    height: 94%;
    border-radius: 0 0 50% 50%;
    transform: translateX(-50%) translateY(20px) rotate(4deg);
  }
}

@media (max-width: 575px) {
  #hero h2 {
    font-size: 30px;
  }

  #hero::after {
    left: 40%;
    top: 0;
    width: 200%;
    height: 95%;
    border-radius: 0 0 50% 50%;
    transform: translateX(-50%) rotate(0deg);
  }

  #hero::before {
    left: 50%;
    top: 0;
    width: 200%;
    height: 94%;
    border-radius: 0 0 50% 50%;
    transform: translateX(-50%) translateY(20px) rotate(4deg);
  }
}

/*--------------------------------------------------------------
# Hero No Slider Section
--------------------------------------------------------------*/
#hero-no-slider {
  width: 100%;
  height: 100vh;
  overflow: hidden;
  position: relative;
  text-align: center;
}

#hero-no-slider::before {
  content: "";
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  background: linear-gradient(to right, rgba(30, 67, 86, 0.8), rgba(30, 67, 86, 0.6)), url("../img/cdf.png") center repeat;
}

#hero-no-slider h2 {
  color: #fff;
  margin-bottom: 15px;
  font-size: 48px;
  font-weight: 700;
}

#hero-no-slider p {
  color: #fff;
}



@media (max-width: 575px) {
  #hero-no-slider h2 {
    font-size: 30px;
  }

#footer {
  height: 80px;
  transition: all 0.5s;
  z-index: 997;
  transition: all 0.5s;
  background: #1e4356 center;
}
}


</style>


  <!-- END INLINE CSS -->

  
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1 class="text-light"><a href="#"><span>Othaya Constituency NG-CDF BURSARY MANAGEMENT SYSTEM</span></a></h1>
      </div>


      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="active " href="#">Home</a></li>
          <!-- <li><a href="#">About</a></li> -->
          <li class="dropdown"><a href="#"><span>Operations</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="signup.php">Sign-up</a></li>
              <li><a href="contactpages.html">Careline? Suggestions?</a></li>
              <li><a href="login.php">Admin Login</a></li>
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Enhance Your Bursary Application Process</h2>
          <p class="animate__animated animate__fadeInUp">Othaya NG CDF BURSARY MANAGEMENT SYSTEM is a system that allows an applicant to apply for the Othaya constituency bursary online. The applicant is required to follow the steps required by the sytem in order to be considered for a bursary opportunity. The applicant will receive email confirmation of approval or disapproval of bursary within the first seven days after application.</p>
        </div>
      </div>

      

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
      </a>
       <footer id="footer" class="fixed-top d-flex align-items-center header-transparent">
      <div class="carousel-item">
        <div class="carousel-container">
      <div class = "footer">
        <h2 class="animate__animated animate__fadeInDown"></h2><br>
            <p class="animate__animated animate__fadeInUp"> MAENDELEO KWA WOTE.<br> VISION: EQUITABLE SOCIAL-ECONOMIC DEVELOPMENT COUNTRYWIDE.<br>
             Copyright 2022 by Hope Thairu.All Rights Reserved.</p>
           </div>
         </div>
       </div>
       </footer>

    </div>
  </section><!-- End Hero -->

  

  
<!-- START MAIN JS FILE -->
  <script>
    
(function() {
  "use strict";

  /**
   * Easy selector helper function
   */
  const select = (el, all = false) => {
    el = el.trim()
    if (all) {
      return [...document.querySelectorAll(el)]
    } else {
      return document.querySelector(el)
    }
  }

  /**
   * Easy event listener function
   */
  const on = (type, el, listener, all = false) => {
    let selectEl = select(el, all)
    if (selectEl) {
      if (all) {
        selectEl.forEach(e => e.addEventListener(type, listener))
      } else {
        selectEl.addEventListener(type, listener)
      }
    }
  }

  /**
   * Easy on scroll event listener 
   */
  const onscroll = (el, listener) => {
    el.addEventListener('scroll', listener)
  }

  /**
   * Scrolls to an element with header offset
   */
  const scrollto = (el) => {
    let header = select('#header')
    let offset = header.offsetHeight

    if (!header.classList.contains('header-scrolled')) {
      offset -= 20
    }

    let elementPos = select(el).offsetTop
    window.scrollTo({
      top: elementPos - offset,
      behavior: 'smooth'
    })
  }

  /**
   * Toggle .header-scrolled class to #header when page is scrolled
   */
  let selectHeader = select('#header')
  if (selectHeader) {
    const headerScrolled = () => {
      if (window.scrollY > 100) {
        selectHeader.classList.add('header-scrolled')
      } else {
        selectHeader.classList.remove('header-scrolled')
      }
    }
    window.addEventListener('load', headerScrolled)
    onscroll(document, headerScrolled)
  }

  /**
   * Mobile nav toggle
   */
  on('click', '.mobile-nav-toggle', function(e) {
    select('#navbar').classList.toggle('navbar-mobile')
    this.classList.toggle('bi-list')
    this.classList.toggle('bi-x')
  })

  /**
   * Mobile nav dropdowns activate
   */
  on('click', '.navbar .dropdown > a', function(e) {
    if (select('#navbar').classList.contains('navbar-mobile')) {
      e.preventDefault()
      this.nextElementSibling.classList.toggle('dropdown-active')
    }
  }, true)

  /**
   * Scrool with ofset on links with a class name .scrollto
   */
  on('click', '.scrollto', function(e) {
    if (select(this.hash)) {
      e.preventDefault()

      let navbar = select('#navbar')
      if (navbar.classList.contains('navbar-mobile')) {
        navbar.classList.remove('navbar-mobile')
        let navbarToggle = select('.mobile-nav-toggle')
        navbarToggle.classList.toggle('bi-list')
        navbarToggle.classList.toggle('bi-x')
      }
      scrollto(this.hash)
    }
  }, true)

  /**
   
   
   * Animation on scroll
   */
  window.addEventListener('load', () => {
    AOS.init({
      duration: 1000,
      easing: "ease-in-out",
      once: true,
      mirror: false
    });
  });

  /**
   * Initiate Pure Counter 
   */
  new PureCounter();

})()
  </script>

  <!-- END MAIN JS FILE -->

</body>

</html>