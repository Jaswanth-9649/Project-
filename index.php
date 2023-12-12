<?php  
 session_start();
 $vis = 0;
 $emp = 0;

if(isset($_SESSION['status']))
{
 if($_SESSION['status'] == 'Employer')
 {
  $emp = 1;
 }
}

 if(!isset($_SESSION['usname']))
 {
  
  $vis = 1;
 }

 ?>
<!doctype html>
<html lang="en">
  <head>
    <title>EMPLOYEMENT REQUIREMENT SYSTEM</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Free-Template.co" />
    <link rel="shortcut icon" href="ftco-32x32.png">
    
    <link rel="stylesheet" href="css/custom-bs.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/bootstrap-select.min.css">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="fonts/line-icons/style.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/animate.min.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">    
  </head>
  <body id="top">

  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>
    

<div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    

    <!-- NAVBAR -->
    <header class="site-navbar mt-3">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div style="font-size:18px; font-color:white;"><a href="index.php"><b>EMPLOYEMENT REQUIREMENT SYSTEM</b></a></div>

          <nav class="mx-auto site-navigation">
            <ul class="site-menu js-clone-nav d-none d-xl-block ml-0 pl-0">
              <li><a href="index.php" class="nav-link active">Home</a></li>
              <li><a href="about.php">About</a></li>
              <li class="has-children">
                <a >Job Listings</a>
                <ul class="dropdown">
                  <li><a href="job-single.php">Job Seeker</a></li>
                  <li><a href="post-job.php">Post a Job</a></li>
                </ul>
              </li>
              <li class="has-children">
                <a >Pages</a>
                <ul class="dropdown">
                  <li><a href="services.php">Services</a></li>
                  <li><a href="faq.php">Frequently Ask Questions</a></li>
                  <li><a href="gallery.php">Gallery</a></li>
                </ul>
              </li>
              <li><a href="contact.php">Contact</a></li>
              <li class="d-lg-none"><a href="post-job.php"><span class="mr-2">+</span> Post a Job</a></li>
              <li class="d-lg-none"><a href="login.php">Log In</a></li>
            </ul>
          </nav>
          
          <div class="right-cta-menu text-right d-flex aligin-items-center col-6">
            <div class="ml-auto">
            
              <?php 
              if($emp && !$vis)
                {
                  echo '<a href="post-job.php" style="font-size: 12px;" class="btn btn-outline-white border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-add"></span>Post</a>';
                }
              ?>
              <?php
              if($vis)
              { 
               echo '<a href="login.php" class="btn btn-primary border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-lock_outline"></span>Log In</a>';
              }
              else{
                echo '<a href="logout.php" class="btn btn-primary border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-lock_outline"></span>Log out</a>';
                echo '<a href="profile.php" class="btn btn-primary border-width-2 d-none d-lg-inline-block" style="margin-left: 10px;">Profile</a>';

              
              }
              ?>
              </div>
            <a href="#" class="site-menu-toggle js-menu-toggle d-inline-block d-xl-none mt-lg-2 ml-3"><span class="icon-menu h3 m-0 p-0 mt-2"></span></a>
          </div>

        </div>
      </div>
    </header>

    <!-- HOME -->
    <section class="home-section section-hero overlay bg-image" style="background-image: url('images/anil.jpg');" id="home-section">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-12">
            <div class="mb-5 text-center">
              <h1 class="text-white font-weight-bold">find your jobs here</h1>
              <p>It's time to start living the life we've imagined.</p>
            </div>
            <div>
                <a href="govt.html"><button style="background-color: #89ba16; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    border-radius: 12px;
    display: flex;
    justify-content: space-around;
    align-items:left;
    width: 250px;
    margin: 0 auto;">Government jobs</button></a>
            </div>
<div>
                <a href="priv.html"><button style="background-color: #89ba16; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    border-radius: 12px;
    display: flex;
    justify-content: space-around;
    align-items:center;
    width: 250px;
margin: 0 auto;">Private jobs</button></a>
            </div>
<div>
                <a href="psu.html"><button style="background-color: #89ba16; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    border-radius: 12px;
    display: flex;
    justify-content: space-around;
    align-items:center;
    width: 250px;
margin: 0 auto;">PSU jobs</button></a>
            </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      <a href="#next" class="scroll-button smoothscroll">
        <span class=" icon-keyboard_arrow_down"></span>
      </a>

    </section>

    <section  style="background-color:lightblue; border-radius:100px" >
      <div class="container" style="background-color:black border-radius:20px;" >
  <div class="alert alert-primary" role="alert">
  <marquee><li><a href="https://www.freejobalert.com/upsc-recruitment/16960/#assistantprofessor">Specialist Grade-III Assistant Professor & Other – 50 Posts</a></li>
  </marquee>
 </div>
<div class="alert alert-secondary" role="alert">
<marquee><li> <a href="https://www.freejobalert.com/madras-high-court/">Madras High Court District Judge (Entry level) Prelims Result & final answer key(govt)</a></li></marquee>
</div>
<div class="alert alert-success" role="alert">
<marquee><li> <a href="https://www.freejobalert.com/upsssc-junior-assistant-2022/999846/">UPSSSC Junior Asst 2022 Main Exam Revised Ansewr Key(govt)</a></li></marquee>
</div>
<div class="alert alert-danger" role="alert">
<marquee><li> <a href="https://www.hirist.com/j/computronics-system-senior-camunda-developer-bpmn-implementation-4-9-yrs-1263450.html?ref=neuvoo&utm_source=neuvoo">Computronics System - Senior Camunda Developer - BPMN Implementation(private)</a></li></marquee>
</div>
<div class="alert alert-warning" role="alert">
<marquee><li> <a href="https://www.freejobalert.com/cisf-head-constable-gd-2023/1058672/">CISF 	Head Constable GD – 215 Posts       .</a></li></marquee>
</div>
<div class="alert alert-info" role="alert">
<marquee><li> <a href="https://www.freejobalert.com/rvnl-recruitment/70436/">	Manager, Deputy Manager & Assistant Manager – 50 Posts      .</a></li></marquee>
</div>
<div class="alert alert-light" role="alert">
<marquee><li> <a href="https://www.9curry.com/notices/0edaa9">SAIL Bokaro Steel Plant Recruitment 2023 - Apply Online for 85 Attendant cum Technician (Trainee) Posts</a></li></marquee>
</div>
<div class="alert alert-dark" role="alert">
<marquee><li> <a href="https://www.9curry.com/notices/3d875b">BHEL Recruitment 2023 - Apply Online for 75 Supervisor Trainee Post                 .</a></li></marquee>
</div>
      </div>
    </section>

    <section>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="./images/anil.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./images/modhi.jpeg" alt="Second slide" style="hight:70% width:70%;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./images/kiran.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    </section>
      </div>
    </section>

    <section class="py-5 bg-image overlay-primary fixed overlay" style="background-image: url('images/hero_1.jpg');">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-8">
            <h2 class="text-white">Looking For A Job?</h2>
            <p class="mb-0 text-white lead">Just a Click Away !</p>
          </div>
          <div class="col-md-3 ml-auto">
            <a href="sign.php" class="btn btn-warning btn-block btn-lg">Sign Up</a>
          </div>
        </div>
      </div>
    </section>
    <footer class="site-footer">

      <a href="#top" class="smoothscroll scroll-top">
        <span class="icon-keyboard_arrow_up"></span>
      </a>

      <div class="container">
        <div class="row mb-5">
          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h3>Company</h3>
            <ul class="list-unstyled">
              <li><a href="about.php">About Us</a></li>
              <li><a href="about.php">Career</a></li>
            </ul>
          </div>
          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h3>Support</h3>
            <ul class="list-unstyled">
              <li><a href="services.php">Support</a></li>
              <li><a href="#">Privacy</a></li>
              <li><a href="#">Terms of Service</a></li>
            </ul>
          </div>
          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h3>Contact Us</h3>
            <div class="footer-social">
              <a href="#"><span class="icon-facebook"></span></a>
              <a href="#"><span class="icon-twitter"></span></a>
              <a href="#"><span class="icon-instagram"></span></a>
              <a href="#"><span class="icon-linkedin"></span></a>
            </div>
          </div>
        </div>

        <div class="row text-center">
          <div class="col-12">
            <p class="copyright"><small>2023</small></p>
          </div>
        </div>
      </div>
    </footer>
  
  </div>

    <!-- SCRIPTS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/stickyfill.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    
    <script src="js/bootstrap-select.min.js"></script>
    
    <script src="js/custom.js"></script>
     <!--<script>
      function myfunction(){
      var e=doucument.getElementById("gpp").value;
      console.log(e);
      if(e=="government")
      {
        window.location.href("govt.html");
      }
      elseif(e=="privatejobs")
      {
        window.location.href("priv.html");
      }
      elseif(e=="psu")
      {
        window.location.href("psu.html");
      }
      }
     </script>-->
  </body>
</html>