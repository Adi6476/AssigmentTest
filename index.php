<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <title>Assigment Test</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/carousel/">

    

    <!-- Bootstrap core CSS -->
<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/dist/css/style.css" rel="stylesheet">



    <style>
      .adibtn{
    display: flex;
    justify-content: center;
    align-items: center;
      }

      #btn{
    border-radius: 6px;
    padding: 6px 45px;
    color: black;
    cursor: pointer;
    position: relative;
    overflow: hidden;
    font-size: 24px;
    font-family: sans-serif;
    transition: all .5s;
    }

  #btn:before{
      width: 100%;
      height: 100%;
      content: '';
      margin: auto;
      position: absolute;
      top:  -100%;
      left: -100%;
      background: #0060ba;
      transition: all .5s;
      z-index: -1;
      
    }
  #btn:hover{
    color: white;
  }
  #btn:hover:before{      
      top: 0;
      left: 0;

  }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
  <body>
    
<body class="hero-anime"> 

  <div class="navigation-wrap bg-light start-header start-style">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="navbar navbar-expand-md navbar-light">
          
            <a class="navbar-brand" href="#">Modern IT Company</a>  
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto py-4 py-md-0">
                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                  <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                  <a class="nav-link" href="#">Work</a>
                </li>
                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 ">
                  <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>

                      <!-- your mega menu starts here! -->
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="servicesDropdown">

                      <!-- next, a divider to tidy things up -->
                       <div class="dropdown-divider"></div>

                      <!-- finally, using flex to create your layout -->
                       <div class="d-md-flex align-items-start justify-content-start mb-3">
                        
                        <div class="col-md-6">    
                         <a class="dropdown-item zoom" href="#"><span class="dropcircle"><i class="fa fa-user dropicon"></i></span>  Bespoke software</a>
                         <a class="dropdown-item zoom" href="#"><span class="dropcircle"><i class="fa fa-user dropicon"></i></span>  Bespoke software</a>
                         <a class="dropdown-item zoom" href="#"><span class="dropcircle"><i class="fa fa-user dropicon"></i></span>  Bespoke software</a>
                         <a class="dropdown-item zoom" href="#"><span class="dropcircle"><i class="fa fa-user dropicon"></i></span>  Bespoke software</a>
                         <a class="dropdown-item zoom" href="#"><span class="dropcircle"><i class="fa fa-user dropicon"></i></span>  Bespoke software</a>
                        </div>
                                                      
                        <div class="col-md-6">
                         <a class="dropdown-item zoom" href="#"><span class="dropcircle"><i class="fa fa-user dropicon"></i></span>  Bespoke software</a>
                         <a class="dropdown-item zoom" href="#"><span class="dropcircle"><i class="fa fa-user dropicon"></i></span>  Bespoke software</a>
                         <a class="dropdown-item zoom" href="#"><span class="dropcircle"><i class="fa fa-user dropicon"></i></span>  Bespoke software</a>
                         <a class="dropdown-item zoom" href="#"><span class="dropcircle"><i class="fa fa-user dropicon"></i></span>  Bespoke software</a>
                         <a class="dropdown-item zoom" href="#"><span class="dropcircle"><i class="fa fa-user dropicon"></i></span>  Bespoke software</a>
                        </div>
                       </div>
                      </div>
                </li>
                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                  <a class="nav-link" href="#Aboutus">About</a>
                </li>
                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                  <a class="nav-link" href="#">Startup</a>
                </li>
                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                  <a class="nav-link" href="#letstalk">Lets's Talk</a>
                </li>
              </ul>
            </div>
            
          </nav>    
        </div>
      </div>
    </div>
  </div>
  <div class="section full-height" style="background-image: url(img/1.jpg); background-size: cover;background-repeat: no-repeat;">
    <div class="absolute-center">
      <div class="section">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h1 class="secadi text-white"><span>W</span><span>E</span>&nbsp;<span>A</span><span>R</span><span>E</span>&nbsp;<span>A</span>&nbsp;<span>M</span><span>O</span><span>D</span><span>E</span><span>R</span><span>N</span>&nbsp;<span>I</span><span>T</span>&nbsp;<span>C</span><span>O</span><span>M</span><span>P</span><span>A</span><span>N</span><span>Y</span></h1>
              <p class="secadii mb-3 text-white">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p> 
            </div>  
          </div>    
        </div>    
      </div>
      <div class="section mt-5">
        <div class="container">
          <div class="row">
            <div class="col-12 text-center">
              <p class="text-white">Scroll Down</p>
              <a href="#Aboutus"><span class="dropcircle bg-light"><i class="fa fa-arrow-down dropicon"></i></span></a>
            </div>  
          </div>    
        </div>      
      </div>
    </div>
  </div>
  <main role="main">

  <div class="container marketing">

     <h2 class="mt-5" id="Aboutus">About Us</h2>
    <div class="row featurette mt-5 mb-3">
      <div class="col-md-7">
        <h4 class="title mt-5">Engineering <br/><span>Impact</span></h4>
        <p class="text-justify">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>
      </div>
      <div class="col-md-5">
        <img src="img/1.jpg" alt="about img" class="img-fluid aboutimg" />
      </div>
    </div>

    
    <hr class="featurette-divider"/>
    <h2 class="mt-5" id="Aboutus">Leadership Team </h2>
      <div class="row featurette mt-5 mb-3">
        <div class="col-4 col-md">
          <div class="zoom">
          <img src="img/1.jpg" alt="about img" class="img-fluid aboutimg" />
          </div>
          <div class="mt-3 mb-3">
            <h4 class="title">Name</h4>
          <p class="text-left">Ceo, Founder</p>
          <div class="mt-2">
              <ul class="social-network social-circle">
               <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
               <li><a href="#" class="icoLinkedin" title="Instagram"><i class="fa fa-instagram"></i></a></li>
               <li><a href="#" class="icoFacebook" title="Twitter"><i class="fa fa-twitter"></i></a></li>
               <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
              </ul>
          </div>
          </div>
        </div>
        <div class="col-4 col-md">
          <div class="zoom">
          <img src="img/1.jpg" alt="about img" class="img-fluid aboutimg" />
          </div>
          <div class="mt-3 mb-3">
            <h4 class="title">Name</h4>
          <p class="text-left">Ceo, Founder</p>
          <div class="mt-2">
              <ul class="social-network social-circle">
               <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
               <li><a href="#" class="icoLinkedin" title="Instagram"><i class="fa fa-instagram"></i></a></li>
               <li><a href="#" class="icoFacebook" title="Twitter"><i class="fa fa-twitter"></i></a></li>
               <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
              </ul>
          </div>
          </div>
        </div>
        <div class="col-4 col-md">
          <div class="zoom">
          <img src="img/1.jpg" alt="about img" class="img-fluid aboutimg" />
          </div>
          <div class="mt-3 mb-3">
            <h4 class="title">Name</h4>
          <p class="text-left">Ceo, Founder</p>
          <div class="mt-2">
              <ul class="social-network social-circle">
               <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
               <li><a href="#" class="icoLinkedin" title="Instagram"><i class="fa fa-instagram"></i></a></li>
               <li><a href="#" class="icoFacebook" title="Twitter"><i class="fa fa-twitter"></i></a></li>
               <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
              </ul>
          </div>
          </div>
        </div>
      </div>
      <hr class="featurette-divider"/>

      <h2 class="title mb-3">Our People</h2>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner aboutimg">
              <div class="carousel-item active">
                <img src="img/2.jpg" alt="slider1" class="img-fluid" />
              </div>
              <div class="carousel-item">
                <img src="img/3.png" alt="slider1" class="img-fluid" />
              </div>
              <div class="carousel-item">
                <img src="img/4.jpg" alt="slider1" class="img-fluid" />
              </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
        </div>

        <hr class="featurette-divider">
      <div class="row featurette" id="letstalk">
        <div class="col-md-10">    
          <h2 class="title mb-3"> Feel Free To Get In Touch With Us </h2>
          <div class="mt-3">
            <p class="text-justify">If you have an idea let's discuss it. just drop us an email or call and we will find a suitable time for a meeting.</p>
          </div>
          <div class="mt-4 mb-3">
            <form class="form-inline">
              <div class="form-group mx-sm-3 mb-2">
                  <input type="text" class="form-control" name="" placeholder="Your Email or Phone">
              </div>
              <div class="adibtn text-left">
                <a href="#" id="btn"> Contact Us <span>&nbsp;</span> <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
              </div>            
            </form>            
          </div>
        </div>
        <div class="col-md-2">
          <div class="">
          <img src="img/5.png" alt="about img" height="150" class=" aboutimg" />
          </div>
        </div>
      </div>

        <hr class="featurette-divider">
  </div>

  
  <footer class="container-fluid bg-dark">
    <div class="container">
      <div class="row">
        <div class="col-6 col-md mt-5 mb-5">
          <h2 class="title text-white"> The IT Company</h2>
          <div class="mt-5">
            <h4 class="text-white">Follow Us at</h4>
            <div>
              <ul class="social-network social-circle">
               <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
               <li><a href="#" class="icoLinkedin" title="Instagram"><i class="fa fa-instagram"></i></a></li>
               <li><a href="#" class="icoFacebook" title="Twitter"><i class="fa fa-twitter"></i></a></li>
               <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-6 col-md mt-5 mb-5">
          <h4 class="title text-white">Get In Touch</h4>
          <div class="mt-1">
            <a href="email" class="text-white">Email@email.com</a><br>
            <a href="email" class="text-white">9811336476</a>
          </div>
          <div class="mt-5 ">
            <h4 class="title text-justify text-white">Explore</h4>
            <ul class="social-network bg-dark">
               <li><a href="#" class=" bg-dark text-white" title="Facebook">Home</a></li>
               <li><a href="#" class=" bg-dark text-white" title="Facebook">Work</a></li>
               <li><a href="#" class=" bg-dark text-white" title="Facebook">Service</a></li>
               <li><a href="#" class=" bg-dark text-white" title="Facebook">About</a></li>
               <li><a href="#" class=" bg-dark text-white" title="Facebook">Contact</a></li>
              </ul>
          </div>
        </div>
      </div>
  <p class="float-right"><a href="#" class="logo"><img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjM3IDcxNyAxNC4zMDIgMTQuMjMyIj4KCTxwYXRoIGZpbGw9IiNiYmIiIGQ9Ik0zNy4wNjcsNzE4LjAwNmEuNzA4LjcwOCwwLDAsMSwxLjI4Mi0uNmw1Ljk3OCwxMi44MTlhLjcwOC43MDgsMCwwLDEtMS4yODIuNmwtNS45NzgtMTIuODE5bTYuNDEsNi44MjRjLS4yLS4zNDMtMy44MDctNy42ODUtMy44MDctNy43MjMsMS4xMTQtLjEyMSw0LjA3OC0uMTM2LDUuMzQ4LjYyM2EzMi40NzUsMzIuNDc1LDAsMCwxLDUuOTU2LjA1Yy40MTUuMDY1LjQzMi4yODcuMDY5LjVhMzYuNTA3LDM2LjUwNywwLDAsMC03LjU2Niw2LjU1eiIvPgo8L3N2Zz4K" alt=""></a></p>
    </div>
  </footer>
</main>
  
<!-- Link to page
================================================== -->


</body>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="assets/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://use.fontawesome.com/31da4be492.js"></script>
     <script type="text/javascript">
       /* Please ❤ this if you like it! */

(function ($) {
  "use strict";

  $(function () {
    var header = $(".start-style");
    $(window).scroll(function () {
      var scroll = $(window).scrollTop();

      if (scroll >= 10) {
        header.removeClass("start-style").addClass("scroll-on");
      } else {
        header.removeClass("scroll-on").addClass("start-style");
      }
    });
  });

  //Animation

  $(document).ready(function () {
    $("body.hero-anime").removeClass("hero-anime");
  });

  //Menu On Hover

  $("body").on("mouseenter mouseleave", ".nav-item", function (e) {
    if ($(window).width() > 750) {
      var _d = $(e.target).closest(".nav-item");
      _d.addClass("show");
      setTimeout(function () {
        _d[_d.is(":hover") ? "addClass" : "removeClass"]("show");
      }, 1);
    }
  });

 
})(jQuery);


     </script> 
  </body>
</html>
 