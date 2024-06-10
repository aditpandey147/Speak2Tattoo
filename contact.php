<?php

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//required files
require 'php/src/Exception.php';
require 'php/src/PHPMailer.php';
require 'php/src/SMTP.php';

//Create an instance; passing `true` enables exceptions
if (isset($_POST["send"])) {

  $mail = new PHPMailer(true);

    //Server settings
    $mail->isSMTP();                              //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';       //Set the SMTP server to send through
    $mail->SMTPAuth   = true;             //Enable SMTP authentication
    $mail->Username   = 'aditpandey14608@gmail.com';   //SMTP write your email
    $mail->Password   = 'qwavmdjpqpcmusqs';      //SMTP password
    $mail->SMTPSecure = 'ssl';            //Enable implicit SSL encryption
    $mail->Port       = 465;                                    

    //Recipients
    $mail->setFrom( $_POST["email"], $_POST["name"]); // Sender Email and name
    $mail->addAddress('aditpandey14608@gmail.com');     //Add a recipient email  
    $mail->addReplyTo($_POST["email"], $_POST["name"]); // reply to sender email

    //Content
    $mail->isHTML(true);               //Set email format to HTML
    $mail->Subject = $_POST["subject"];   // email subject headings
    $mail->Body    = $_POST["message"]; //email message

    // Success sent message alert
    $mail->send();
    echo
    " 
    <script> 
     alert('Message was sent successfully!');
     document.location.href = 'index.html';
    </script>
    ";
}
?>
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="">

  <title>  Speak2Tattoo  </title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- font awesome style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- lightbox -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>

<body>



    <!-- header section strats -->
    <header class="header_section bg-color">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <span>
              Speak2Tattoo  
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ">
              <li class="nav-item ">
                <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html"> About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="service.html"> Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="gallery.html">Gallery</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="contact.html">Contact Us <span class="sr-only">(current)</span> </a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </header>
     
    <!--contact_section_start-->
    <div class="container-fluid py-5 ">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                <h5 class="text-primary">Get In Touch</h5>
                <h1 class="mb-3">Contact for any query</h1>
            </div>
            <div class="contact-detail position-relative p-5">
                <div class="row g-5 mb-5 justify-content-center">
                    <div class="col-xl-4 col-lg-6 wow fadeIn" data-wow-delay=".3s">
                        <div class="d-flex bg-light p-3 rounded">
                            <div class="flex-shrink-0 btn-square bg-secondary_1 rounded-circle" style="width: 64px; height: 64px;">
                                <i class="fas fa-map-marker-alt text-white contact_icon_size"></i>
                            </div>
                            <div class="ms-3">
                                <h4 class="text-primary contact_font">Address</h4>
                                <a href="https://goo.gl/maps/Zd4BCynmTb98ivUJ6" target="_blank" class="h5">23 rank Str, NY</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 wow fadeIn" data-wow-delay=".5s">
                        <div class="d-flex bg-light p-3 rounded">
                            <div class="flex-shrink-0 btn-square bg-secondary_1 rounded-circle" style="width: 64px; height: 64px;">
                                <i class="fa fa-phone text-white contact_icon_size"></i>
                            </div>
                            <div class="ms-3">
                                <h4 class="text-primary contact_font">Call Us</h4>
                                <a class="h5" href="tel:+0123456789" target="_blank">+012 3456 7890</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 wow fadeIn d-none d-md-block" data-wow-delay=".7s">
                        <div class="d-flex bg-light p-3 rounded">
                            <div class="flex-shrink-0 btn-square bg-secondary_1 rounded-circle" style="width: 64px; height: 64px;">
                                <i class="fa fa-envelope text-white contact_icon_size"></i>
                            </div>
                            <div class="ms-3">
                                <h4 class="text-primary contact_font">Email Us</h4>
                                <a class="h5" href="mailto:info@example.com" target="_blank">info@example.com</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-5">
                  <div class="col-lg-6 wow fadeIn" data-wow-delay=".3s">
                        <div class="h-100 rounded contact-map">
                            <iframe class="rounded w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3681.7634840397222!2d88.42821037429!3d22.66260532966739!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f89f3c3ae38987%3A0x82dc6152fd66ee3f!2sSpeak2tattoo%20%7C%20Best%20Tattoo%20%26Piercing%20Studio%20in%20Birati%20%7C%20Best%20Tattoo%20Parlour%20in%20Birati!5e0!3m2!1sen!2sin!4v1717828772432!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay=".5s">
                      <div class=" rounded contact-form">
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                          <div class="mb-4">
                            <input type="text" name="name" class="form-control border-0 py-3" placeholder="Your Name">
                          </div>
                          <div class="mb-4">
                            <input type="email" name="email" class="form-control border-0 py-3" placeholder="Your Email">
                          </div>
                            <div class="mb-4">
                            <input type="text" name="subject" class="form-control border-0 py-3" placeholder="Subject">
                          </div>
                          <div class="mb-4">
                            <textarea class="w-100 form-control border-0 py-3" rows="6" cols="10" name="message" placeholder="Message"></textarea>
                          </div>
                          <div class="text-start">
                            <button class="btn bg-warning text-white py-3 px-5" name="send" type="submit" onclick="myFunction()">Send Message</button>
                          </div>
                        </form>
                      </div>
                  </div>  
                </div>
            </div>
        </div> 
    </div>
    <!--contact_section_end-->

  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <div class="row footer_form_social_row">

        <div class="col-md-4 col-lg-3">
          <div class="social_box">
            <a href="">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-youtube-play" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="row footer_main_row">
        <div class="col-md-6 col-lg-3 footer-col">
          <div class="footer_pic">
            <img src="images/New logo speak2tatto_2024.jpg" alt="">
          </div>
        </div>


        <div class="col-md-6 col-lg-3 footer-col">
          <div class="footer_detail">
            <h4>
              Visit Us Today
            </h4>
            <p class="mb-0">
              Visit our studio and let our talented artists help bring your vision to life.
            </p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 footer-col">
          <h4>
            Contact Us
          </h4>
          <div class="footer_contact">
            <a href="">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <span>
                245/3, Madhusudhan Banerjee Rd, Khalisha Kota, Birati, Kolkata
              </span>
            </a>
            <a href="">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span>
                Call +01 1234567890
              </span>
            </a>
            <a href="">
              <i class="fa fa-envelope"></i>
              <span>
                nirupamnick@gmail.com
              </span>
            </a>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 footer-col">
          <div class="map_container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3681.7634840397222!2d88.42821037429!3d22.66260532966739!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f89f3c3ae38987%3A0x82dc6152fd66ee3f!2sSpeak2tattoo%20%7C%20Best%20Tattoo%20%26Piercing%20Studio%20in%20Birati%20%7C%20Best%20Tattoo%20Parlour%20in%20Birati!5e0!3m2!1sen!2sin!4v1717828772432!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-info">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="#"> Speak2Tattoo </a>
      </p>
    </div>
  </footer>
  <!-- footer section -->

  
  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- lightbox -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js  "></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->

</body>

</html>