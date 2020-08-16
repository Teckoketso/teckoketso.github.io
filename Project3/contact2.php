<?php
if(isset($_POST['submit'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "koketsomotlapema@gmail.com, info@deblaq.co.za, metsemokgawa@deblaq.co.za, sebitsosebone@deblaq.co.za";
    $email_subject = "Mails from Website Request";
 
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
 
 
    // validation expected data exists
    if(!isset($_POST['fname']) ||
        !isset($_POST['lname']) ||
        !isset($_POST['email']) ||
        !isset($_POST['subject']) ||
        !isset($_POST['message'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
 
     
 
    $fname = $_POST['fname']; // required
    $lname = $_POST['lname']; // required
    $email_from = $_POST['email']; // required
    $subject = $_POST['subject']; // not required
    $message = $_POST['message']; // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$fname)) {
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
  }
 
  if(!preg_match($string_exp,$lname)) {
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
  }
 
  if(strlen($message) < 2) {
    $error_message .= 'The message you entered do not appear to be valid.<br />';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
    $email_message = "Form details below.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    $email_message .= "First Name: ".clean_string($fname)."\n";
    $email_message .= "Last Name: ".clean_string($lname)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "subject: ".clean_string($subject)."\n";
    $email_message .= "message: ".clean_string($message)."\n";
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- include your own success html here -->
 
<!--
    Author: Mabilo Tech / Koketso Motlapema
    Author URL: http://www.mabilotech.co.za
-->
<!DOCTYPE html>
<html lang="en" class="js svg supports svgclippaths smil mediaquerries no-touchevents cssfilters csstranforms csstransitions">
  <head profile="https://www.deblaq.co.za">
    <title>Dablaq FA/Gallary</title>
    <!--Meta-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="format-detection" content="telephone=no">
		<link rel="icon" href="images/logo - Copy (2).png">
		<meta property="og:site_name" content="Deblaq FA" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="https://www.deblaq.co.za/" />
		<meta name="google-site-verification" content="" />
		<meta property="og:image" content="images/MABILO.png" />
		<meta property="og:title" content="Deblaq FA" />
        <meta property="og:description" content="DeblaQ FA believes there is no service if client’s needs and expectations are not met or exceeded. 
            Our Company offers various services in the Design and Print Works, Marketing and Business Administration." />
        <meta name="description" content="DeblaQ FA believes there is no service if client’s needs and expectations are not met or exceeded. 
            Our Company offers various services in the Design and Print Works, Marketing and Business Administration." />
		<meta name="keywords" content="deblaqfa, the black child, deblaq fa, metse mokgawa, marketing company, Business Administration, Print works, design, in limpopo, in polokwane" />
        <meta http-equiv="refresh" content="2;url=index.html">
    <!--//Meta-->
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,900" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/slider-pro.css">

    <link rel="stylesheet" href="css/fontawesome-all.css"> <!-- Font-Awesome-Icons-CSS -->

    <link rel="stylesheet" href="css/style.css">
<!--Gallary tst-->

    <link rel="stylesheet" href="css/simpleLightbox.css.css">

<!---->
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  
  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    <div class="top-bar py-3 bg-light" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-6 text-left">
            <ul class="social-media">
              <li><a href="#" class="p-2"><span class="icon-facebook"></span></a></li>
              <li><a href="#" class="p-2"><span class="icon-twitter"></span></a></li>
              <li><a href="#" class="p-2"><span class="icon-instagram"></span></a></li>
              <li><a href="#" class="p-2"><span class="icon-linkedin"></span></a></li>
            </ul>
          </div>
          <div class="col-6">
            <p class="mb-0 float-right">
              <span class="mr-3"><a href="tel:0731083737"> <span class="icon-phone mr-2"></span><span class="d-none d-lg-inline-block">+27 73 108 3737</span></a></span>
              <span><a href="mailto:info@deblaq.co.za"><span class="icon-envelope mr-2"></span><span class="d-none d-lg-inline-block">info@deblaq.co.za</span></a></span>
            </p>
            
          </div>
        </div>
      </div> 
    </div>

    <header class="site-navbar py-4 bg-white js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">
          <div class="col-3 pr-0 col-xl-1">
            <a class="" href="index.html"><img src="images/logo - Copy (2).png" alt="" height="70"> </a>
            
          </div>
          <div class="col-3 p-0 col-xl-1">
            <h4 class="mb-0 site-logo"><strong>Business Consulting</strong>  </h4>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="index.html" class="nav-link">Home</a></li>
                <li><a href="about.html" class="nav-link">About Us</a></li>
                <li><a href="services.html" class="nav-link">Services</a></li>
                <li><a href="gallary.html" class="nav-link active">Portfolio</a></li>
                <li><a href="contact.html" class="nav-link">Contact</a></li>
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="index.html" class="site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>
    
    
    <section class="site-section overlay mt-5 ">
      <!--================ Start CTA Area =================-->
        <div class="cta-area section_gap overlay">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <h1>Your Email has been sent</h1>
                        <p>
                        Thank you for contacting us. We will be in touch with you very soon.
                        </p>
                        <a href="#" class="primary_btn yellow_btn rounded">Donate</a> 
                    </div>
                </div>
            </div>
        </div>
    <!--================ End CTA Area =================-->
    </section> 
    </div>
      
        <!-- //portfolio -->
    <footer class="site-footer">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-6">
                  <h2 class="footer-heading mb-4">About Us</h2>
                  <p>DeblaQ FA is established to serve clients and pride on it’s own uniqueness, creativity and hard working to all 
                    people and world wide, spread and influence positive impact through hard work and creativity. Our main goal is 
                    to create opportunities and better the lives of people of South Africa as well as improving South African 
                    economy through our determination and persistence. We want to fight and also combat unemployment rate.</p>
                </div>
                <div class="col-md-3 ml-auto">
                  <h2 class="footer-heading mb-4">Quick Links</h2>
                  <ul class="list-unstyled">
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="gallary.html">Portfolio</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                  </ul>
                </div>
                <div class="col-md-3">
                  <h2 class="footer-heading mb-4">Follow Us</h2>
                  <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                </div>
              </div>
            </div>
            <!----
            <div class="col-md-3">
              <h2 class="footer-heading mb-4">Subscribe Newsletter</h2>
              <form action="#" method="post" class="footer-subscribe">
                <div class="input-group mb-3">
                  <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                  <div class="input-group-append">
                    <button class="btn btn-primary text-black" type="button" id="button-addon2">Send</button>
                  </div>
                </div>
              </form>
            </div>
          -->
          </div>
          <div class="row pt-5 mt-5 text-center">
            <div class="col-md-12">
              <div class="border-top pt-5">
              <p>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          Copyright &copy;<script>document.write(new Date().getFullYear());</script> Deblaq FA All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
          | Website Developed By <a href="mt/index.html" target="_blank" >Mabilo Tech</a>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </p>
              </div>
            </div>
            
          </div>
        </div>
      </footer>
    </div>
  </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
<!--Gallary-->
    <script src="js/simpleLightbox.js.js"></script>
    <!-- script for portfolio -->
    <script>
      $('.proj_gallery_grid a').simpleLightbox();
  </script>

    
    <script src="js/main.js"></script>
    </body>
</html>
 
<?php
 
}
?>