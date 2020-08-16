<?php 

if(isset($_POST['Submit'])){
    $to = "info@bambisandlasam.co.za;mosoma91@gmail.com"; // this is your Email address
    $from = $_POST['Email']; // this is the sender's Email address
    $Name = $_POST['Name'];
    $Surname = $_POST['Surname'];
    $Phone = $_POST['Number']
    $Head = $_POST['Subject']
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $Name . " " . $Surname . " " . $Phone. " " .  " wrote the following:" . "\n\n" . $Head . " " "\n". $_POST[Message'];
    $message2 = "Here is a copy of your message " . $Name . "\n\n" . $_POST['Message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender

}
header("refresh:2;url=index.html");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <!--meta http-equiv="refresh" content="2;url=index.html" -->
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png"type="image/png">
        <title>Bambisandla Sam</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/style-override.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
<body>
        
	<!--================ Start Header Menu Area =================-->
	<header class="header_area">
		<div class="main_menu">
			<div class="container">
				<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container">
						<!-- Brand and toggle get grouped for better mobile display -->
						<a class="navbar-brand logo_h" href="index.html"><img  style="height:50px"  src="img/logo.png" alt=""></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav ml-auto">
								<li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li> 
								<li class="nav-item"><a class="nav-link" href="index.html#about">About</a></li> 
								<li class="nav-item"><a class="nav-link" href="index.html#accreditation">Accreditations</a> 
								<li class="nav-item"><a class="nav-link" href="index.html#team">Team</a> 
								<li class="nav-item"><a class="nav-link" href="index.html#gallery">Gallery</a>
								<li class="nav-item"><a class="nav-link" href="index.html#contact">Contact</a></li>
							</ul>
						</div> 
					</div>
				</nav>
			</div>
		</div>
	</header>
	     <section class="banner_area">
       
	
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
 
	  <!--================ Start footer Area  =================-->	
    <footer>
        <div class="footer-area">
            <div class="container">
                <div class="row section_gap">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget tp_widgets"> 
						
							<img style="height:80px" src="img/logo.png" alt="">
							<br/><br/>
                            <p>
                                <b>Bambisandla Sam</b> is a subsidiary of ECMDP ACADEMY<br/>
                               
                            </p>
							<p>Co Reg No.  REG: 2017/019589/08<br/>PBO NO: 930058957</p>
                         
                        </div>
                    </div>
                     
                    <div class="offset-lg-1 col-lg-4 col-md-6 col-sm-6">
                        <div class="single-footer-widget instafeed">
                            <h4 class="footer_title">Gallery</h6>
                            <ul class="list instafeed d-flex flex-wrap">
                                 <li><img class="g-images" src="img/gallery/g1.jpg" alt=""></li>
                                <li><img class="g-images" src="img/gallery/g2.jpg" alt=""></li>
                                <li><img class="g-images" src="img/gallery/g3.jpg" alt=""></li>
                                <li><img class="g-images" src="img/gallery/g4.jpg" alt=""></li>
                                <li><img class="g-images" src="img/gallery/g5.jpg" alt=""></li>
                                <li><img class="g-images" src="img/gallery/g6.jpg" alt=""></li>
                                <li><img class="g-images" src="img/gallery/g7.jpg" alt=""></li>
                                <li><img class="g-images" src="img/gallery/g8.jpg" alt=""></li>
                                <li><img class="g-images" src="img/gallery/g9.jpg" alt=""></li>
                                <li><img class="g-images" src="img/gallery/g10.jpg" alt=""></li>
                                <li><img class="g-images" src="img/gallery/g12.jpg" alt=""></li> 
                                <li><img class="g-images" src="img/gallery/g13.jpg" alt=""></li> 
                                <li><img class="g-images" src="img/gallery/g11.jpg" alt=""></li>  
                            </ul>
                        </div>
                    </div>
                    <div class="offset-lg-1 col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget tp_widgets">
                            <h4 class="footer_title">Contact Us</h4>
                            <div class="ml-40">
                                <p class="sm-head">
                                    <span class="fa fa-location-arrow"></span>
                                    Head Office
                                </p>
                                <p>2 Nursery Road. Western Deep Levels</p>
    
                                <p class="sm-head">
                                    <span class="fa fa-phone"></span>
                                    Phone Number
                                </p>
                                <p>
									Veronica Thokozani Namane
                                    +27 18 7882013 <br>
                                    +27 82 821 2177
                                </p>
    
                                <p class="sm-head">
                                    <span class="fa fa-envelope"></span>
                                    Email
                                </p>
                                <p>
                                    info.bssnpo@gmail.com <br>
                                </p>
								
								
								<p class="sm-head">
                                    <span class="fa fa-globe"></span>
                                    Website
                                </p>
                                <p> 
                                    www.BambisandlaSam.co.za
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="row d-flex">
                    <p class="col-lg-12 footer-text text-center">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Made By <a href="https://wedesignsolutions.com" target="_blank">WeDesign Solutions Pty Ltd</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
            </div>
        </div>
    </footer>
    <!--================ End footer Area  =================-->  
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/stellar.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/mail-script.js"></script>
        <!-- contact js -->
        <script src="js/jquery.form.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/contact.js"></script>
        <!--gmaps Js-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
        <script src="js/gmaps.min.js"></script>
        <script src="js/theme.js"></script>
    </body>
</html>

?>