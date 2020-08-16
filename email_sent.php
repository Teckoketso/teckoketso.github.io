
<?php
if(isset($_POST['submit'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "koketsomotlapema@gmail.com";
    $email_subject = "Mails from Website Request: Mabilo Tech";
 
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
        !isset($_POST['number']) ||
        !isset($_POST['email']) ||
        !isset($_POST['subject']) ||
        !isset($_POST['message'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
 
     
 
    $fname = $_POST['fname']; // required
    $number = $_POST['number']; // required
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
 
  if(!preg_match($string_exp,$number)) {
    $error_message .= 'The Number you entered does not appear to be valid.<br />';
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
    $email_message .= "Last Name: ".clean_string($number)."\n";
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
<html lang="en">
    <head>
        <title>Email Sent</title>
	
	<!-- Meta tag Keywords -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="utf-8">
		<meta name="format-detection" content="telephone=no">
		<link rel="icon" href="images/mt-icon.png">
		<meta property="og:site_name" content="Mabilo Tech" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="" />
		<meta name="google-site-verification" content="" />
		<meta property="og:image" content="image/mt-icon.png" />
		<meta property="og:title" content="Mabilo Tech - Web Development" />
		<meta property="og:description" content="Mabilo Tech Offers Professional Website Development & Best Website Design Services" />
		<meta name="description" content="Mabilo Tech Offers Professional Website Development & Best Website Design Services" />
		<meta name="keywords" content="Mabilo Tech, Website Design, Koketso Motlapema, Responsive websites" />
        <!-- // Mtea Keywords -->
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

		<!-- CSS here -->
            <link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="assets/css/gijgo.css">
            <link rel="stylesheet" href="assets/css/slicknav.css">
            <link rel="stylesheet" href="assets/css/animate.min.css">
            <link rel="stylesheet" href="assets/css/magnific-popup.css">
            <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="assets/css/themify-icons.css">
            <link rel="stylesheet" href="assets/css/slick.css">
            <link rel="stylesheet" href="assets/css/nice-select.css">
            <link rel="stylesheet" href="assets/css/style.css">
            <link rel="stylesheet" href="assets/css/responsive.css">

            <link rel="stylesheet" href="assets/css/styles.css">
            <link rel="stylesheet" href="assets/css/stylslider.css">
    </head>
<body>
    <!-- Preloader Start -->
    <div id="preloader-active">
            <div class="preloader d-flex align-items-center justify-content-center">
                <div class="preloader-inner position-relative">
                    <div class="preloader-circle"></div>
                    <div class="preloader-img pere-text">
                        <img src="assets/img/logo/mtlogo1.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- Preloader Start -->
    
        <header>
            <!-- Header Start -->
           <div class="header-area">
                <div class="main-header ">
                    <div class="header-top top-bg d-none d-lg-block">
                        <div class="container">
                            <div class="col-xl-12">
                             <div class="row d-flex justify-content-between align-items-center">
                                 <div class="header-info-left">
                                     <ul>     
                                         <li>+27 76 272 0209</li>
                                         <li>koketsomotlapema@deblaq.co.za</li>
                                     </ul>
                                 </div>
                                 <div class="header-info-right">
                                     <ul>     
                                         <li>Mon - Fri: 9:00 - 19:00 / Closed on Weekends</li>
                                     </ul>
                                 </div>
                            </div>
                            </div>
                        </div>
                    </div>
                   <div class="header-bottom  header-sticky">
                        <div class="container">
                            <div class="row align-items-center">
                                <!-- logo -->
                                <div class="col-lg-1 col-sm-3 col-xl-2 navbar-brand ">
                                    <a class="img" href="index.html"><img src="assets/img/logo//mtlogo1.png" width="70%"  alt="Mabilo Tech Logo" > </a>
                                </div>
                                <!-- //logo -->
                                <div class="col-xl-8 col-lg-8 col-md-8">
                                    <!-- Main-menu -->
                                    <div class="main-menu f-right d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">                                            
                                                <li><a href="index.html">Home</a></li>
                                                <li><a href="about.html">About</a></li>
                                                <li><a href="services.html">Services</a></li>
                                                <li><a href="single-blog.html">News</a></li>
                                                <li><a href="contact.html">Contact</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>             
                                <div class="col-xl-2 col-lg-3 col-md-3">
                                    <!-- Header-btn -->
                                    <div class="header-btn d-none d-lg-block">
                                        <a href="#" class="get-btn">Get A QUOTE</a>
                                    </div>
                                </div>
                                <!-- Mobile Menu -->
                                <div class="col-12">
                                    <div class="mobile_menu d-block d-lg-none"></div>
                                </div>
                            </div>
                        </div>
                   </div>
                </div>
           </div>
            <!-- Header End -->
        </header>
        <!-- Email Sent -->
        <div class="main_banner layer">
                <div class="container">
                    <div class="d-flex agileinfo-main flex-column">
                        <div class="maint_grid">
                            <h4>Your Email has been sent!!</h4>
                            <div class="progress_agile  my-sm-5 my-3">
                                <div class="progress-outer mt-3">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-info progress-bar-striped active" style="width:100%;"></div>
                                        <div class="progress-value">100%</div>
                                    </div>
                                </div>
                            </div>
                            <p>Thank you for contacting us. We will be in touch with you very soon.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- // maintenance -->
<footer>
        <!-- Footer Start-->
       <div class="footer-area footer-bg footer-padding">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                   <div class="single-footer-caption mb-50">
                     <div class="single-footer-caption mb-30">
                         <div class="footer-tittle">
                             <h4>About Us</h4>
                             <div class="footer-pera">
                                <p>Mabilo Tech came into existence with a pioneering vision of "Bringing People and Computer Together" and help 
                                    to build requisite talent for the emerging information based economy.
                                </p>
                            </div>
                         </div>
                     </div>
                      <!-- logo -->
                      
                   </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                    <div class="single-footer-caption mb-50">
                        <div class="footer-tittle">
                            <h4>Contact Info</h4>
                            <ul>
                                <li>
                                <p> Address : Olievenhoutbosch EXT23, Pretoria</p>
                                </li>
                                <li><a href="#">Phone : +27 76 272 0209</a></li>
                                <li><a href="#">Email : koketsomotlapema@deblaq.co.za</a></li>
                                <li><a href="#">Time : 09:00 - 19:00</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-5">
                    <div class="single-footer-caption mb-50">
                        <!-- Linkedin-->
                         <div class="LI-profile-badge"  data-version="v1" data-size="medium" data-locale="en_US" data-type="horizontal" data-theme="dark" data-vanity="koketso-motlapema-28698511b">
                         <a class="LI-simple-link" href='https://za.linkedin.com/in/koketso-motlapema-28698511b?trk=profile-badge'>Koketso Motlapema</a></div>
 
                         <!--//linkedin-->
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                 
                  
                    <div class="single-footer-caption mb-50">
                     <div class="footer-logo">
                         <a href="index.html"><img src="assets/img/logo/mtlogo1.png" width="100%" alt=""></a>
                     </div>
                         <!----
                        <div class="footer-tittle">
                            <h4>Newsletter</h4>
                            <div class="footer-pera footer-pera2">
                             <p>Heaven fruitful doesn't over lesser in days. Appear creeping seasons</p>
                         </div>
                         <!-Form --
                         <div class="footer-form" >
                             <div id="mc_embed_signup">
                                 <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                 method="get" class="subscribe_form relative mail_part">
                                     <input type="email" name="email" id="newsletter-form-email" placeholder="Email Address"
                                     class="placeholder hide-on-focus" onfocus="this.placeholder = ''"
                                     onblur="this.placeholder = ' Email Address '">
                                     <div class="form-icon">
                                         <button type="submit" name="submit" id="newsletter-submit"
                                         class="email_icon newsletter-submit button-contactForm"><img src="assets/img/icon/form_icon.png" alt=""></button>
                                     </div>
                                     <div class="mt-10 info"></div>
                                 </form>
                             </div>
                         </div>
                        </div>
                     -->
                    </div>
                 
                </div>
            </div>
        </div>
    </div>
    <!-- footer-bottom aera -->
    <div class="footer-bottom-area footer-bg">
        <div class="container">
            <div class="footer-border">
                 <div class="row d-flex justify-content-between align-items-center">
                     <div class="col-xl-10 col-lg-10 ">
                         <div class="footer-copy-right">
                             <p>
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script> Mabilo Tech | All rights reserved
                                </p>
                         </div>
                     </div>
                     <div class="col-xl-2 col-lg-2">
                         <div class="footer-social f-right">
                             <a href="https://facebook.com/koketsopastamotlapema"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://twitter.com/koketsomotlapem"><i class="fab fa-twitter"></i></a>
                                <a href="https://za.linkedin.com/in/koketso-motlapema-28698511b"><i class="fab fa-linkedin-in"></i></a>
                         </div>
                     </div>
                 </div>
            </div>
        </div>
    </div>
    <!-- Footer End-->
    </footer>
   
	<!-- JS here -->
	
		<!-- All JS Custom Plugins Link Here here -->
        <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
		
		<!-- Jquery, Popper, Bootstrap -->
		<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="./assets/js/popper.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="./assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="./assets/js/owl.carousel.min.js"></script>
        <script src="./assets/js/slick.min.js"></script>
        <!-- Date Picker -->
        <script src="./assets/js/gijgo.min.js"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="./assets/js/wow.min.js"></script>
		<script src="./assets/js/animated.headline.js"></script>
        <script src="./assets/js/jquery.magnific-popup.js"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="./assets/js/jquery.scrollUp.min.js"></script>
        <script src="./assets/js/jquery.nice-select.min.js"></script>
		<script src="./assets/js/jquery.sticky.js"></script>
        
        <!-- contact js 
        <script src="./assets/js/contact.js"></script>
        <script src="./assets/js/jquery.form.js"></script>
        <script src="./assets/js/jquery.validate.min.js"></script>
        <script src="./assets/js/mail-script.js"></script>
        <script src="./assets/js/jquery.ajaxchimp.min.js"></script>

                                 -->
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="./assets/js/plugins.js"></script>
        <script src="./assets/js/main.js"></script>
        
    </body>
</html>